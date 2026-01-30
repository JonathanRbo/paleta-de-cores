# Color Palette Generator

Um gerador de paletas de cores harmoniosas construído com PHP e [Squeleton Framework](https://squeleton.dev).

![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=flat-square&logo=php&logoColor=white)
![Squeleton](https://img.shields.io/badge/Squeleton-v4-6366f1?style=flat-square)
![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)

## Features

- **7 Tipos de Harmonia**: Análoga, Complementar, Triádica, Tetrádica, Split-Complementar, Monocromática e Aleatória
- **Geração em Tempo Real**: Pressione `Espaço` para gerar novas paletas instantaneamente
- **Bloqueio de Cores**: Trave cores específicas enquanto regenera o resto da paleta
- **Exportação Múltipla**: CSS, SCSS, JSON e Tailwind config
- **Histórico**: Acesse rapidamente as últimas 10 paletas geradas
- **Cópia Rápida**: Copie cores individuais ou código completo com um clique
- **100% Responsivo**: Funciona em desktop, tablet e mobile
- **Dark Mode**: Interface escura elegante

## Demo

Acesse a demo online ou execute localmente:

```bash
# Com PHP built-in server
cd color-palette-generator
php -S localhost:8000

# Acesse http://localhost:8000
```

## Instalação

1. Clone o repositório:
```bash
git clone https://github.com/seu-usuario/color-palette-generator.git
```

2. Coloque em seu servidor web (Apache, Nginx, etc.) ou use o servidor PHP:
```bash
php -S localhost:8000
```

3. Acesse no navegador.

## API

O projeto inclui uma API PHP para geração de paletas via HTTP.

### Endpoint

```
GET /api/generate.php
POST /api/generate.php
```

### Parâmetros

| Parâmetro | Tipo | Padrão | Descrição |
|-----------|------|--------|-----------|
| `base` | string | `#6366f1` | Cor base em formato HEX |
| `harmony` | string | `random` | Tipo de harmonia |

### Tipos de Harmonia

- `analogous` - Cores adjacentes no círculo cromático
- `complementary` - Cores opostas no círculo cromático
- `triadic` - Três cores equidistantes
- `tetradic` - Quatro cores em retângulo
- `split-complementary` - Base + duas cores adjacentes à complementar
- `monochromatic` - Variações de luminosidade da mesma cor
- `random` - Cores aleatórias harmoniosas

### Exemplo de Uso

```bash
# Gerar paleta análoga baseada em azul
curl "http://localhost:8000/api/generate.php?base=%236366f1&harmony=analogous"
```

### Resposta

```json
{
  "success": true,
  "base_color": "#6366f1",
  "harmony": "analogous",
  "palette": [
    {
      "index": 1,
      "hex": "#8B66F1",
      "rgb": {"r": 139, "g": 102, "b": 241},
      "hsl": {"h": 256, "s": 82, "l": 67},
      "name": "Roxo",
      "css_rgb": "rgb(139, 102, 241)",
      "css_hsl": "hsl(256, 82%, 67%)"
    }
    // ... mais 4 cores
  ],
  "exports": {
    "css": ":root { ... }",
    "scss": "$color-1: ...",
    "tailwind": "colors: { ... }"
  }
}
```

## Estrutura do Projeto

```
color-palette-generator/
├── index.php          # Interface principal
├── api/
│   └── generate.php   # API de geração de paletas
└── README.md
```

## Tecnologias

- **Backend**: PHP 7.4+
- **Frontend**: [Squeleton Framework v4](https://squeleton.dev)
  - CSS Grid & Flexbox utilities
  - WOW.js animations
  - Toastify notifications
  - Iccons icon set
- **Teoria das Cores**: Algoritmos baseados em HSL para harmonias precisas

## Teoria das Cores

O gerador usa conversões precisas entre espaços de cor:

- **HEX ↔ HSL**: Permite manipulação intuitiva de matiz, saturação e luminosidade
- **Harmonias**: Baseadas em ângulos no círculo cromático (30°, 120°, 180°, etc.)

## Contribuindo

1. Fork o projeto
2. Crie sua branch (`git checkout -b feature/nova-feature`)
3. Commit suas mudanças (`git commit -m 'Adiciona nova feature'`)
4. Push para a branch (`git push origin feature/nova-feature`)
5. Abra um Pull Request

## Licença

MIT License - veja [LICENSE](LICENSE) para detalhes.

---

Feito com PHP + [Squeleton Framework](https://squeleton.dev)
