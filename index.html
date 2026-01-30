<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Palette Generator | Gerador de Paletas de Cores</title>
    <meta name="description" content="Gere paletas de cores harmoniosas para seus projetos de design e desenvolvimento web.">

    <!-- Squeleton CSS -->
    <link rel="stylesheet" href="https://cdn.squeleton.dev/squeleton.v4.min.css">

    <!-- Squeleton JS (Head) -->
    <script src="https://cdn.squeleton.dev/squeleton-main.v4.min.js"></script>

    <style>
        :root {
            --bg-primary: #0f0f0f;
            --bg-secondary: #1a1a1a;
            --bg-card: #242424;
            --text-primary: #ffffff;
            --text-secondary: #a0a0a0;
            --accent: #6366f1;
            --accent-hover: #818cf8;
            --success: #22c55e;
            --border-color: #333;
        }

        body {
            background: var(--bg-primary);
            color: var(--text-primary);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        .btn-primary {
            background: var(--accent);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            background: var(--accent-hover);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: var(--bg-card);
            color: var(--text-primary);
            border: 1px solid var(--border-color);
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn-secondary:hover {
            border-color: var(--accent);
            color: var(--accent);
        }

        .color-card {
            background: var(--bg-card);
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .color-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 40px rgba(99, 102, 241, 0.2);
        }

        .color-preview {
            height: 180px;
            transition: height 0.3s ease;
        }

        .color-info {
            padding: 16px;
        }

        .color-hex {
            font-family: 'JetBrains Mono', monospace;
            font-size: 14px;
            background: var(--bg-secondary);
            padding: 6px 12px;
            border-radius: 6px;
            display: inline-block;
        }

        .color-name {
            font-size: 13px;
            color: var(--text-secondary);
        }

        .copy-btn {
            background: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-secondary);
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            transition: all 0.2s ease;
        }

        .copy-btn:hover {
            border-color: var(--success);
            color: var(--success);
        }

        .copy-btn.copied {
            background: var(--success);
            border-color: var(--success);
            color: white;
        }

        .harmony-select {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            color: var(--text-primary);
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            min-width: 200px;
        }

        .harmony-select:focus {
            outline: none;
            border-color: var(--accent);
        }

        .base-color-input {
            width: 60px;
            height: 60px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            padding: 0;
            background: none;
        }

        .base-color-input::-webkit-color-swatch-wrapper {
            padding: 0;
        }

        .base-color-input::-webkit-color-swatch {
            border: 2px solid var(--border-color);
            border-radius: 12px;
        }

        .gradient-preview {
            height: 80px;
            border-radius: 12px;
            background: linear-gradient(90deg, var(--color-1), var(--color-2), var(--color-3), var(--color-4), var(--color-5));
        }

        .export-code {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 16px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 13px;
            color: var(--text-secondary);
            overflow-x: auto;
        }

        .tab-btn {
            background: transparent;
            border: none;
            color: var(--text-secondary);
            padding: 10px 20px;
            font-size: 14px;
            border-bottom: 2px solid transparent;
            transition: all 0.2s ease;
        }

        .tab-btn:hover, .tab-btn.active {
            color: var(--accent);
            border-bottom-color: var(--accent);
        }

        .history-item {
            display: flex;
            gap: 4px;
            padding: 8px;
            background: var(--bg-card);
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .history-item:hover {
            transform: scale(1.05);
        }

        .history-color {
            width: 24px;
            height: 24px;
            border-radius: 4px;
        }

        .keyboard-hint {
            background: var(--bg-card);
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            color: var(--text-secondary);
        }

        @keyframes pulse-ring {
            0% { transform: scale(0.95); opacity: 1; }
            50% { transform: scale(1.05); opacity: 0.8; }
            100% { transform: scale(0.95); opacity: 1; }
        }

        .generating .color-preview {
            animation: pulse-ring 1s ease-in-out infinite;
        }

        .lock-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0,0,0,0.5);
            border: none;
            color: white;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            opacity: 0;
        }

        .color-card:hover .lock-btn {
            opacity: 1;
        }

        .lock-btn.locked {
            opacity: 1;
            background: var(--accent);
        }

        footer a {
            color: var(--accent);
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="p-20-tb border-b" style="border-color: var(--border-color);">
        <div class="container">
            <div class="d-flex f-items-center f-justify-between">
                <div class="d-flex f-items-center f-gap-15">
                    <span class="iccon-palette-1 fs-12" style="color: var(--accent);"></span>
                    <h1 class="fs-10 fw-700">Color Palette Generator</h1>
                </div>
                <div class="d-flex f-items-center f-gap-15 xs-d-none">
                    <span class="keyboard-hint">Espaço para gerar</span>
                    <a href="https://github.com" target="_blank" class="btn-secondary cursor-pointer d-flex f-items-center f-gap-10">
                        <span class="iccon-github-1"></span>
                        GitHub
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="f-grow-1">
        <!-- Hero Section -->
        <section class="p-40-tb xs-p-20-tb">
            <div class="container text-center">
                <h2 class="fs-14 xs-fs-11 fw-700 m-15-b wow fadeInUp">
                    Crie paletas de cores <span style="color: var(--accent);">harmoniosas</span>
                </h2>
                <p class="fs-9 xs-fs-7 m-30-b wow fadeInUp" style="color: var(--text-secondary);" data-wow-delay="0.1s">
                    Gere combinações de cores perfeitas para seus projetos de design e desenvolvimento
                </p>
            </div>
        </section>

        <!-- Controls Section -->
        <section class="p-20-tb">
            <div class="container">
                <div class="d-flex f-wrap f-items-center f-justify-center f-gap-20 xs-f-col">
                    <div class="d-flex f-items-center f-gap-15">
                        <label class="fs-6" style="color: var(--text-secondary);">Cor base:</label>
                        <input type="color" id="baseColor" value="#6366f1" class="base-color-input cursor-pointer">
                    </div>

                    <div class="d-flex f-items-center f-gap-15">
                        <label class="fs-6" style="color: var(--text-secondary);">Harmonia:</label>
                        <select id="harmonyType" class="harmony-select cursor-pointer">
                            <option value="analogous">Análoga</option>
                            <option value="complementary">Complementar</option>
                            <option value="triadic">Triádica</option>
                            <option value="tetradic">Tetrádica</option>
                            <option value="split-complementary">Split-Complementar</option>
                            <option value="monochromatic">Monocromática</option>
                            <option value="random" selected>Aleatória</option>
                        </select>
                    </div>

                    <button id="generateBtn" class="btn-primary cursor-pointer d-flex f-items-center f-gap-10">
                        <span class="iccon-refresh-1"></span>
                        Gerar Paleta
                    </button>
                </div>
            </div>
        </section>

        <!-- Palette Display -->
        <section class="p-40-tb xs-p-20-tb">
            <div class="container">
                <!-- Gradient Preview -->
                <div class="gradient-preview m-30-b wow fadeIn" id="gradientPreview"></div>

                <!-- Color Cards -->
                <div class="row gap-20" id="paletteContainer">
                    <!-- Colors will be injected here -->
                </div>
            </div>
        </section>

        <!-- Export Section -->
        <section class="p-40-tb" style="background: var(--bg-secondary);">
            <div class="container">
                <h3 class="fs-11 fw-600 m-20-b text-center">Exportar Paleta</h3>

                <!-- Tabs -->
                <div class="d-flex f-justify-center f-gap-10 m-20-b">
                    <button class="tab-btn active cursor-pointer" data-tab="css">CSS</button>
                    <button class="tab-btn cursor-pointer" data-tab="scss">SCSS</button>
                    <button class="tab-btn cursor-pointer" data-tab="json">JSON</button>
                    <button class="tab-btn cursor-pointer" data-tab="tailwind">Tailwind</button>
                </div>

                <!-- Code Output -->
                <div class="export-code" id="exportCode">
                    <!-- Code will be injected here -->
                </div>

                <div class="text-center m-20-t">
                    <button id="copyExport" class="btn-secondary cursor-pointer d-flex f-items-center f-gap-10 m-auto-lr">
                        <span class="iccon-copy-1"></span>
                        Copiar Código
                    </button>
                </div>
            </div>
        </section>

        <!-- History Section -->
        <section class="p-40-tb xs-p-20-tb">
            <div class="container">
                <h3 class="fs-10 fw-600 m-20-b d-flex f-items-center f-gap-10">
                    <span class="iccon-clock-1"></span>
                    Histórico Recente
                </h3>
                <div class="d-flex f-wrap f-gap-10" id="historyContainer">
                    <p class="fs-6" style="color: var(--text-secondary);">Nenhuma paleta gerada ainda...</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="p-30-tb border-t" style="border-color: var(--border-color);">
        <div class="container text-center">
            <p class="fs-6" style="color: var(--text-secondary);">
                Feito com <span style="color: #ef4444;">♥</span> usando
                <a href="https://squeleton.dev" target="_blank">Squeleton Framework</a> + PHP
            </p>
            <p class="fs-5 m-10-t" style="color: var(--text-secondary);">
                Pressione <span class="keyboard-hint">Espaço</span> para gerar novas cores
            </p>
        </div>
    </footer>

    <!-- Squeleton JS (Footer) -->
    <script src="https://cdn.squeleton.dev/squeleton-scripts.v4.min.js"></script>

    <script>
        // State
        let currentPalette = [];
        let lockedColors = [false, false, false, false, false];
        let history = [];
        let currentTab = 'css';

        // Color utility functions
        function hexToHsl(hex) {
            hex = hex.replace('#', '');
            const r = parseInt(hex.substr(0, 2), 16) / 255;
            const g = parseInt(hex.substr(2, 2), 16) / 255;
            const b = parseInt(hex.substr(4, 2), 16) / 255;

            const max = Math.max(r, g, b);
            const min = Math.min(r, g, b);
            let h, s, l = (max + min) / 2;

            if (max === min) {
                h = s = 0;
            } else {
                const d = max - min;
                s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
                switch (max) {
                    case r: h = ((g - b) / d + (g < b ? 6 : 0)) / 6; break;
                    case g: h = ((b - r) / d + 2) / 6; break;
                    case b: h = ((r - g) / d + 4) / 6; break;
                }
            }

            return { h: h * 360, s: s * 100, l: l * 100 };
        }

        function hslToHex(h, s, l) {
            h /= 360;
            s /= 100;
            l /= 100;

            let r, g, b;
            if (s === 0) {
                r = g = b = l;
            } else {
                const hue2rgb = (p, q, t) => {
                    if (t < 0) t += 1;
                    if (t > 1) t -= 1;
                    if (t < 1/6) return p + (q - p) * 6 * t;
                    if (t < 1/2) return q;
                    if (t < 2/3) return p + (q - p) * (2/3 - t) * 6;
                    return p;
                };
                const q = l < 0.5 ? l * (1 + s) : l + s - l * s;
                const p = 2 * l - q;
                r = hue2rgb(p, q, h + 1/3);
                g = hue2rgb(p, q, h);
                b = hue2rgb(p, q, h - 1/3);
            }

            const toHex = x => {
                const hex = Math.round(x * 255).toString(16);
                return hex.length === 1 ? '0' + hex : hex;
            };

            return `#${toHex(r)}${toHex(g)}${toHex(b)}`;
        }

        function getColorName(hex) {
            const hsl = hexToHsl(hex);
            const h = hsl.h;
            const s = hsl.s;
            const l = hsl.l;

            if (s < 10) {
                if (l < 20) return 'Preto';
                if (l < 40) return 'Cinza Escuro';
                if (l < 60) return 'Cinza';
                if (l < 80) return 'Cinza Claro';
                return 'Branco';
            }

            let name;
            if (h < 15) name = 'Vermelho';
            else if (h < 45) name = 'Laranja';
            else if (h < 70) name = 'Amarelo';
            else if (h < 150) name = 'Verde';
            else if (h < 200) name = 'Ciano';
            else if (h < 260) name = 'Azul';
            else if (h < 290) name = 'Roxo';
            else if (h < 330) name = 'Rosa';
            else name = 'Vermelho';

            if (l < 30) return name + ' Escuro';
            if (l > 70) return name + ' Claro';
            return name;
        }

        function generateRandomColor() {
            const h = Math.floor(Math.random() * 360);
            const s = Math.floor(Math.random() * 40) + 50;
            const l = Math.floor(Math.random() * 40) + 30;
            return hslToHex(h, s, l);
        }

        function generatePalette(baseColor, harmonyType) {
            const hsl = hexToHsl(baseColor);
            let colors = [];

            switch(harmonyType) {
                case 'analogous':
                    colors = [
                        hslToHex((hsl.h - 30 + 360) % 360, hsl.s, hsl.l),
                        hslToHex((hsl.h - 15 + 360) % 360, hsl.s, hsl.l),
                        baseColor,
                        hslToHex((hsl.h + 15) % 360, hsl.s, hsl.l),
                        hslToHex((hsl.h + 30) % 360, hsl.s, hsl.l)
                    ];
                    break;

                case 'complementary':
                    const comp = (hsl.h + 180) % 360;
                    colors = [
                        hslToHex(hsl.h, hsl.s, Math.max(hsl.l - 20, 10)),
                        baseColor,
                        hslToHex(hsl.h, hsl.s, Math.min(hsl.l + 20, 90)),
                        hslToHex(comp, hsl.s, hsl.l),
                        hslToHex(comp, hsl.s, Math.min(hsl.l + 20, 90))
                    ];
                    break;

                case 'triadic':
                    colors = [
                        baseColor,
                        hslToHex((hsl.h + 120) % 360, hsl.s, hsl.l),
                        hslToHex((hsl.h + 240) % 360, hsl.s, hsl.l),
                        hslToHex(hsl.h, hsl.s, Math.min(hsl.l + 25, 90)),
                        hslToHex((hsl.h + 120) % 360, hsl.s, Math.max(hsl.l - 25, 10))
                    ];
                    break;

                case 'tetradic':
                    colors = [
                        baseColor,
                        hslToHex((hsl.h + 90) % 360, hsl.s, hsl.l),
                        hslToHex((hsl.h + 180) % 360, hsl.s, hsl.l),
                        hslToHex((hsl.h + 270) % 360, hsl.s, hsl.l),
                        hslToHex(hsl.h, hsl.s, Math.min(hsl.l + 20, 90))
                    ];
                    break;

                case 'split-complementary':
                    colors = [
                        baseColor,
                        hslToHex((hsl.h + 150) % 360, hsl.s, hsl.l),
                        hslToHex((hsl.h + 210) % 360, hsl.s, hsl.l),
                        hslToHex(hsl.h, hsl.s, Math.max(hsl.l - 20, 10)),
                        hslToHex(hsl.h, hsl.s, Math.min(hsl.l + 20, 90))
                    ];
                    break;

                case 'monochromatic':
                    colors = [
                        hslToHex(hsl.h, hsl.s, 15),
                        hslToHex(hsl.h, hsl.s, 35),
                        baseColor,
                        hslToHex(hsl.h, hsl.s, 65),
                        hslToHex(hsl.h, hsl.s, 85)
                    ];
                    break;

                case 'random':
                default:
                    for (let i = 0; i < 5; i++) {
                        colors.push(generateRandomColor());
                    }
                    break;
            }

            // Keep locked colors
            return colors.map((color, i) => lockedColors[i] ? currentPalette[i] : color);
        }

        function renderPalette() {
            const container = document.getElementById('paletteContainer');
            container.innerHTML = currentPalette.map((color, i) => `
                <div class="c-xs-6 c-sm-4 c-lg-auto">
                    <div class="color-card wow fadeInUp ${lockedColors[i] ? 'locked' : ''}" data-wow-delay="${i * 0.1}s">
                        <div class="color-preview ps-relative" style="background-color: ${color};">
                            <button class="lock-btn cursor-pointer ${lockedColors[i] ? 'locked' : ''}" onclick="toggleLock(${i})" aria-label="Travar cor">
                                <span class="iccon-${lockedColors[i] ? 'lock-1' : 'unlock-1'}"></span>
                            </button>
                        </div>
                        <div class="color-info">
                            <div class="d-flex f-items-center f-justify-between m-10-b">
                                <span class="color-hex">${color.toUpperCase()}</span>
                                <button class="copy-btn cursor-pointer" onclick="copyColor('${color}', this)">
                                    <span class="iccon-copy-1"></span>
                                </button>
                            </div>
                            <p class="color-name">${getColorName(color)}</p>
                        </div>
                    </div>
                </div>
            `).join('');

            // Update gradient preview
            const gradient = document.getElementById('gradientPreview');
            gradient.style.setProperty('--color-1', currentPalette[0]);
            gradient.style.setProperty('--color-2', currentPalette[1]);
            gradient.style.setProperty('--color-3', currentPalette[2]);
            gradient.style.setProperty('--color-4', currentPalette[3]);
            gradient.style.setProperty('--color-5', currentPalette[4]);
            gradient.style.background = `linear-gradient(90deg, ${currentPalette.join(', ')})`;

            // Update export code
            updateExportCode();

            // Re-init WOW for new elements
            if (typeof WOW !== 'undefined') {
                new WOW().init();
            }
        }

        function toggleLock(index) {
            lockedColors[index] = !lockedColors[index];
            renderPalette();
        }

        function copyColor(color, btn) {
            navigator.clipboard.writeText(color).then(() => {
                btn.classList.add('copied');
                btn.innerHTML = '<span class="iccon-check-1"></span>';

                Toastify({
                    text: `Cor ${color} copiada!`,
                    duration: 2000,
                    gravity: "bottom",
                    position: "right",
                    style: {
                        background: "var(--success)",
                        borderRadius: "8px"
                    }
                }).showToast();

                setTimeout(() => {
                    btn.classList.remove('copied');
                    btn.innerHTML = '<span class="iccon-copy-1"></span>';
                }, 2000);
            });
        }

        function updateExportCode() {
            const code = document.getElementById('exportCode');
            let output = '';

            switch(currentTab) {
                case 'css':
                    output = `:root {\n${currentPalette.map((c, i) => `    --color-${i + 1}: ${c};`).join('\n')}\n}`;
                    break;
                case 'scss':
                    output = currentPalette.map((c, i) => `$color-${i + 1}: ${c};`).join('\n');
                    break;
                case 'json':
                    output = JSON.stringify({
                        palette: currentPalette.map((c, i) => ({
                            name: `color-${i + 1}`,
                            hex: c,
                            rgb: hexToRgb(c)
                        }))
                    }, null, 2);
                    break;
                case 'tailwind':
                    output = `colors: {\n${currentPalette.map((c, i) => `    'brand-${i + 1}': '${c}',`).join('\n')}\n}`;
                    break;
            }

            code.textContent = output;
        }

        function hexToRgb(hex) {
            hex = hex.replace('#', '');
            return `rgb(${parseInt(hex.substr(0, 2), 16)}, ${parseInt(hex.substr(2, 2), 16)}, ${parseInt(hex.substr(4, 2), 16)})`;
        }

        function addToHistory() {
            history.unshift([...currentPalette]);
            if (history.length > 10) history.pop();

            const container = document.getElementById('historyContainer');
            container.innerHTML = history.map((palette, i) => `
                <div class="history-item" onclick="loadFromHistory(${i})">
                    ${palette.map(c => `<div class="history-color" style="background: ${c};"></div>`).join('')}
                </div>
            `).join('');
        }

        function loadFromHistory(index) {
            currentPalette = [...history[index]];
            lockedColors = [false, false, false, false, false];
            renderPalette();
        }

        function generate() {
            const baseColor = document.getElementById('baseColor').value;
            const harmonyType = document.getElementById('harmonyType').value;

            // Animation feedback
            document.querySelectorAll('.color-card').forEach(card => {
                card.classList.add('generating');
            });

            setTimeout(() => {
                currentPalette = generatePalette(baseColor, harmonyType);
                addToHistory();
                renderPalette();
            }, 200);
        }

        // Event listeners
        document.getElementById('generateBtn').addEventListener('click', generate);

        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                currentTab = btn.dataset.tab;
                updateExportCode();
            });
        });

        document.getElementById('copyExport').addEventListener('click', function() {
            const code = document.getElementById('exportCode').textContent;
            navigator.clipboard.writeText(code).then(() => {
                this.innerHTML = '<span class="iccon-check-1"></span> Copiado!';
                setTimeout(() => {
                    this.innerHTML = '<span class="iccon-copy-1"></span> Copiar Código';
                }, 2000);
            });
        });

        // Keyboard shortcut
        document.addEventListener('keydown', (e) => {
            if (e.code === 'Space' && e.target.tagName !== 'INPUT' && e.target.tagName !== 'SELECT') {
                e.preventDefault();
                generate();
            }
        });

        // Initialize
        generate();
    </script>
</body>
</html>
