<?php
/**
 * Color Palette Generator API
 * Generates harmonious color palettes based on color theory
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

/**
 * Convert HEX to HSL
 */
function hexToHsl(string $hex): array {
    $hex = ltrim($hex, '#');

    $r = hexdec(substr($hex, 0, 2)) / 255;
    $g = hexdec(substr($hex, 2, 2)) / 255;
    $b = hexdec(substr($hex, 4, 2)) / 255;

    $max = max($r, $g, $b);
    $min = min($r, $g, $b);
    $l = ($max + $min) / 2;

    if ($max === $min) {
        $h = $s = 0;
    } else {
        $d = $max - $min;
        $s = $l > 0.5 ? $d / (2 - $max - $min) : $d / ($max + $min);

        switch ($max) {
            case $r:
                $h = (($g - $b) / $d + ($g < $b ? 6 : 0)) / 6;
                break;
            case $g:
                $h = (($b - $r) / $d + 2) / 6;
                break;
            case $b:
                $h = (($r - $g) / $d + 4) / 6;
                break;
        }
    }

    return [
        'h' => round($h * 360),
        's' => round($s * 100),
        'l' => round($l * 100)
    ];
}

/**
 * Convert HSL to HEX
 */
function hslToHex(float $h, float $s, float $l): string {
    $h /= 360;
    $s /= 100;
    $l /= 100;

    if ($s === 0.0) {
        $r = $g = $b = $l;
    } else {
        $hue2rgb = function($p, $q, $t) {
            if ($t < 0) $t += 1;
            if ($t > 1) $t -= 1;
            if ($t < 1/6) return $p + ($q - $p) * 6 * $t;
            if ($t < 1/2) return $q;
            if ($t < 2/3) return $p + ($q - $p) * (2/3 - $t) * 6;
            return $p;
        };

        $q = $l < 0.5 ? $l * (1 + $s) : $l + $s - $l * $s;
        $p = 2 * $l - $q;

        $r = $hue2rgb($p, $q, $h + 1/3);
        $g = $hue2rgb($p, $q, $h);
        $b = $hue2rgb($p, $q, $h - 1/3);
    }

    return sprintf('#%02x%02x%02x', round($r * 255), round($g * 255), round($b * 255));
}

/**
 * Get color name based on HSL values
 */
function getColorName(string $hex): string {
    $hsl = hexToHsl($hex);
    $h = $hsl['h'];
    $s = $hsl['s'];
    $l = $hsl['l'];

    if ($s < 10) {
        if ($l < 20) return 'Preto';
        if ($l < 40) return 'Cinza Escuro';
        if ($l < 60) return 'Cinza';
        if ($l < 80) return 'Cinza Claro';
        return 'Branco';
    }

    if ($h < 15) $name = 'Vermelho';
    elseif ($h < 45) $name = 'Laranja';
    elseif ($h < 70) $name = 'Amarelo';
    elseif ($h < 150) $name = 'Verde';
    elseif ($h < 200) $name = 'Ciano';
    elseif ($h < 260) $name = 'Azul';
    elseif ($h < 290) $name = 'Roxo';
    elseif ($h < 330) $name = 'Rosa';
    else $name = 'Vermelho';

    if ($l < 30) return $name . ' Escuro';
    if ($l > 70) return $name . ' Claro';
    return $name;
}

/**
 * Generate random color
 */
function generateRandomColor(): string {
    $h = mt_rand(0, 360);
    $s = mt_rand(50, 90);
    $l = mt_rand(30, 70);
    return hslToHex($h, $s, $l);
}

/**
 * Generate palette based on harmony type
 */
function generatePalette(string $baseColor, string $harmonyType): array {
    $hsl = hexToHsl($baseColor);
    $h = $hsl['h'];
    $s = $hsl['s'];
    $l = $hsl['l'];
    $colors = [];

    switch ($harmonyType) {
        case 'analogous':
            $colors = [
                hslToHex(fmod($h - 30 + 360, 360), $s, $l),
                hslToHex(fmod($h - 15 + 360, 360), $s, $l),
                $baseColor,
                hslToHex(fmod($h + 15, 360), $s, $l),
                hslToHex(fmod($h + 30, 360), $s, $l)
            ];
            break;

        case 'complementary':
            $comp = fmod($h + 180, 360);
            $colors = [
                hslToHex($h, $s, max($l - 20, 10)),
                $baseColor,
                hslToHex($h, $s, min($l + 20, 90)),
                hslToHex($comp, $s, $l),
                hslToHex($comp, $s, min($l + 20, 90))
            ];
            break;

        case 'triadic':
            $colors = [
                $baseColor,
                hslToHex(fmod($h + 120, 360), $s, $l),
                hslToHex(fmod($h + 240, 360), $s, $l),
                hslToHex($h, $s, min($l + 25, 90)),
                hslToHex(fmod($h + 120, 360), $s, max($l - 25, 10))
            ];
            break;

        case 'tetradic':
            $colors = [
                $baseColor,
                hslToHex(fmod($h + 90, 360), $s, $l),
                hslToHex(fmod($h + 180, 360), $s, $l),
                hslToHex(fmod($h + 270, 360), $s, $l),
                hslToHex($h, $s, min($l + 20, 90))
            ];
            break;

        case 'split-complementary':
            $colors = [
                $baseColor,
                hslToHex(fmod($h + 150, 360), $s, $l),
                hslToHex(fmod($h + 210, 360), $s, $l),
                hslToHex($h, $s, max($l - 20, 10)),
                hslToHex($h, $s, min($l + 20, 90))
            ];
            break;

        case 'monochromatic':
            $colors = [
                hslToHex($h, $s, 15),
                hslToHex($h, $s, 35),
                $baseColor,
                hslToHex($h, $s, 65),
                hslToHex($h, $s, 85)
            ];
            break;

        case 'random':
        default:
            for ($i = 0; $i < 5; $i++) {
                $colors[] = generateRandomColor();
            }
            break;
    }

    return $colors;
}

/**
 * Convert HEX to RGB
 */
function hexToRgb(string $hex): array {
    $hex = ltrim($hex, '#');
    return [
        'r' => hexdec(substr($hex, 0, 2)),
        'g' => hexdec(substr($hex, 2, 2)),
        'b' => hexdec(substr($hex, 4, 2))
    ];
}

// Handle request
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'OPTIONS') {
    http_response_code(204);
    exit;
}

// Get parameters
$baseColor = $_GET['base'] ?? $_POST['base'] ?? '#6366f1';
$harmonyType = $_GET['harmony'] ?? $_POST['harmony'] ?? 'random';

// Validate base color
if (!preg_match('/^#?[0-9A-Fa-f]{6}$/', $baseColor)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid color format. Use HEX format: #RRGGBB']);
    exit;
}

// Ensure # prefix
if (strpos($baseColor, '#') !== 0) {
    $baseColor = '#' . $baseColor;
}

// Valid harmony types
$validHarmonies = ['analogous', 'complementary', 'triadic', 'tetradic', 'split-complementary', 'monochromatic', 'random'];

if (!in_array($harmonyType, $validHarmonies)) {
    http_response_code(400);
    echo json_encode([
        'error' => 'Invalid harmony type',
        'valid_types' => $validHarmonies
    ]);
    exit;
}

// Generate palette
$palette = generatePalette($baseColor, $harmonyType);

// Build response
$response = [
    'success' => true,
    'base_color' => $baseColor,
    'harmony' => $harmonyType,
    'palette' => array_map(function($color, $index) {
        $rgb = hexToRgb($color);
        $hsl = hexToHsl($color);
        return [
            'index' => $index + 1,
            'hex' => strtoupper($color),
            'rgb' => $rgb,
            'hsl' => $hsl,
            'name' => getColorName($color),
            'css_rgb' => sprintf('rgb(%d, %d, %d)', $rgb['r'], $rgb['g'], $rgb['b']),
            'css_hsl' => sprintf('hsl(%d, %d%%, %d%%)', $hsl['h'], $hsl['s'], $hsl['l'])
        ];
    }, $palette, array_keys($palette)),
    'exports' => [
        'css' => ":root {\n" . implode("\n", array_map(function($color, $i) {
            return "    --color-" . ($i + 1) . ": " . strtoupper($color) . ";";
        }, $palette, array_keys($palette))) . "\n}",
        'scss' => implode("\n", array_map(function($color, $i) {
            return '$color-' . ($i + 1) . ': ' . strtoupper($color) . ';';
        }, $palette, array_keys($palette))),
        'tailwind' => "colors: {\n" . implode("\n", array_map(function($color, $i) {
            return "    'brand-" . ($i + 1) . "': '" . strtoupper($color) . "',";
        }, $palette, array_keys($palette))) . "\n}"
    ]
];

echo json_encode($response, JSON_PRETTY_PRINT);
