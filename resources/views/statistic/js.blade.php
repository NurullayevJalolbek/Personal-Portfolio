<!-- ApexChart JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<script>
    let shadeColor, headingColor, labelColor, borderColor, legendColor;

    if (isDarkStyle) {
        cardColor = config.colors_dark.cardColor;
        headingColor = config.colors_dark.headingColor;
        labelColor = config.colors_dark.textMuted;
        legendColor = config.colors_dark.bodyColor;
        borderColor = config.colors_dark.borderColor;
        shadeColor = config.colors_dark.shadeColor;
    } else {
        cardColor = config.colors.cardColor;
        headingColor = config.colors.headingColor;
        labelColor = config.colors.textMuted;
        legendColor = config.colors.bodyColor;
        borderColor = config.colors.borderColor;
        shadeColor = config.colors.borderColor;
    }

    let series = [{
        name: "Foydalanuvchilar",
        data: [100, 41, 35, 151, 49, 62,169, 91],
    }];

    let dates = [
        "12.01.25",
        "11.01.25",
        "10.01.25",
        "09.01.25",
        "08.01.25",
        "07.01.25",
        "06.01.25",
        "05.01.25",
    ];
</script>
