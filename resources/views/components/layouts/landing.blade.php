<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="União Engenharia - Especialistas em refrigeração e ar condicionado. Instalação, manutenção e limpeza de ar condicionado, câmaras frias e refrigeração comercial.">
    <meta name="keywords" content="refrigeração, ar condicionado, câmara fria, manutenção, instalação, União Engenharia">
    <meta name="author" content="União Engenharia">

    <meta property="og:title" content="União Engenharia | Refrigeração e Ar Condicionado">
    <meta property="og:description" content="Especialistas em refrigeração e ar condicionado. Instalação, manutenção e limpeza com qualidade e garantia.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">

    <title>União Engenharia | Refrigeração e Ar Condicionado</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "LocalBusiness",
        "name": "União Engenharia",
        "description": "Serviços de refrigeração e ar condicionado",
        "telephone": "+55-00-0000-0000",
        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Sua Cidade",
            "addressRegion": "UF",
            "addressCountry": "BR"
        },
        "openingHours": "Mo-Fr 08:00-18:00, Sa 08:00-12:00"
    }
    </script>
</head>
<body class="antialiased text-gray-800 bg-white">
    {{ $slot }}
</body>
</html>
