{{-- @include('dashboard.charts.chart') --}}
<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Grafik permintaan per bulan</h4>
            </div>
            <div class="card-body">

                <div id="chart-last-request" style="min-height: 315px;">
                    <div id="chart-statistic" class="apexcharts-canvas apexcharts-theme-light" style="height:300px;">
                        <svg id="SvgjsSvg2998" width="auto" height="300" xmlns="http://www.w3.org/2000/svg"
                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                            style="background: transparent;">
                            <foreignObject x="0" y="0" width="auto" height="300">
                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                    style="max-height: 150px;"></div>
                            </foreignObject>
                            <g id="SvgjsG3104" class="apexcharts-yaxis" rel="0" transform="translate(9.25, 0)">
                                <g id="SvgjsG3105" class="apexcharts-yaxis-texts-g"><text id="SvgjsText3107"
                                        font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end"
                                        dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan3108">32</tspan>
                                        <title>32</title>
                                    </text><text id="SvgjsText3110" font-family="Helvetica, Arial, sans-serif" x="20"
                                        y="89.48700000000001" text-anchor="end" dominant-baseline="auto"
                                        font-size="11px" font-weight="400" fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan3111">24</tspan>
                                        <title>24</title>
                                    </text><text id="SvgjsText3113" font-family="Helvetica, Arial, sans-serif" x="20"
                                        y="147.574" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                        font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan3114">16</tspan>
                                        <title>16</title>
                                    </text><text id="SvgjsText3116" font-family="Helvetica, Arial, sans-serif" x="20"
                                        y="205.66100000000003" text-anchor="end" dominant-baseline="auto"
                                        font-size="11px" font-weight="400" fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan3117">8</tspan>
                                        <title>8</title>
                                    </text><text id="SvgjsText3119" font-family="Helvetica, Arial, sans-serif" x="20"
                                        y="263.748" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                        font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan3120">0</tspan>
                                        <title>0</title>
                                    </text></g>
                            </g>
                            <g id="SvgjsG3000" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(39.25, 30)">
                                <defs id="SvgjsDefs2999">
                                    <linearGradient id="SvgjsLinearGradient3003" x1="0" y1="0"
                                        x2="0" y2="1">
                                        <stop id="SvgjsStop3004" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)"
                                            offset="0"></stop>
                                        <stop id="SvgjsStop3005" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                            offset="1"></stop>
                                        <stop id="SvgjsStop3006" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                            offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMask7iw1577i">
                                        <rect id="SvgjsRect3008" width="891.75" height="236.348" x="-2" y="-2"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMask7iw1577i"></clipPath>
                                    <clipPath id="nonForecastMask7iw1577i"></clipPath>
                                    <clipPath id="gridRectMarkerMask7iw1577i">
                                        <rect id="SvgjsRect3009" width="891.75" height="236.348" x="-2" y="-2"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <rect id="SvgjsRect3007" width="51.78541666666667" height="232.348"
                                    x="11.020840454101556" y="0" rx="0" ry="0" opacity="1"
                                    stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient3003)"
                                    class="apexcharts-xcrosshairs" y2="232.348" filter="none" fill-opacity="0.9"
                                    x1="11.020840454101556" x2="11.020840454101556"></rect>
                                <line id="SvgjsLine3043" x1="0" y1="233.348" x2="0"
                                    y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                    class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine3044" x1="73.97916666666667" y1="233.348"
                                    x2="73.97916666666667" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine3045" x1="147.95833333333334" y1="233.348"
                                    x2="147.95833333333334" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine3046" x1="221.9375" y1="233.348" x2="221.9375"
                                    y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                    class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine3047" x1="295.9166666666667" y1="233.348"
                                    x2="295.9166666666667" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine3048" x1="369.89583333333337" y1="233.348"
                                    x2="369.89583333333337" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine3049" x1="443.87500000000006" y1="233.348"
                                    x2="443.87500000000006" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine3050" x1="517.8541666666667" y1="233.348"
                                    x2="517.8541666666667" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine3051" x1="591.8333333333334" y1="233.348"
                                    x2="591.8333333333334" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine3052" x1="665.8125" y1="233.348" x2="665.8125"
                                    y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                    class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine3053" x1="739.7916666666666" y1="233.348"
                                    x2="739.7916666666666" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine3054" x1="813.7708333333333" y1="233.348"
                                    x2="813.7708333333333" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine3055" x1="887.7499999999999" y1="233.348"
                                    x2="887.7499999999999" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0"
                                    stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <g id="SvgjsG3039" class="apexcharts-grid">
                                    <g id="SvgjsG3040" class="apexcharts-gridlines-horizontal">
                                        <line id="SvgjsLine3057" x1="0" y1="58.087" x2="887.75"
                                            y2="58.087" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine3058" x1="0" y1="116.174" x2="887.75"
                                            y2="116.174" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine3059" x1="0" y1="174.26100000000002"
                                            x2="887.75" y2="174.26100000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                    </g>
                                    <g id="SvgjsG3041" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine3062" x1="0" y1="232.348" x2="887.75"
                                        y2="232.348" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                    <line id="SvgjsLine3061" x1="0" y1="1" x2="0"
                                        y2="232.348" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG3042" class="apexcharts-grid-borders">
                                    <line id="SvgjsLine3056" x1="0" y1="0" x2="887.75"
                                        y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                        class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine3060" x1="0" y1="232.348" x2="887.75"
                                        y2="232.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                        class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine3103" x1="0" y1="233.348" x2="887.75"
                                        y2="233.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG3010" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG3011" class="apexcharts-series" rel="1" seriesName="sales"
                                        data:realIndex="0">
                                        <path id="SvgjsPath3016"
                                            d="M 11.096875 232.34900000000002 L 11.096875 167.00112500000003 L 62.882291666666674 167.00112500000003 L 62.882291666666674 232.34900000000002 Z"
                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask7iw1577i)"
                                            pathTo="M 11.096875 232.34900000000002 L 11.096875 167.00112500000003 L 62.882291666666674 167.00112500000003 L 62.882291666666674 232.34900000000002 Z"
                                            pathFrom="M 11.096875 232.34900000000002 L 11.096875 232.34900000000002 L 62.882291666666674 232.34900000000002 L 62.882291666666674 232.34900000000002 L 62.882291666666674 232.34900000000002 L 62.882291666666674 232.34900000000002 L 62.882291666666674 232.34900000000002 L 11.096875 232.34900000000002 Z"
                                            cy="167.00012500000003" cx="85.07604166666667" j="0" val="9"
                                            barHeight="65.347875" barWidth="51.78541666666667"></path>
                                        <path id="SvgjsPath3018"
                                            d="M 85.07604166666667 232.34900000000002 L 85.07604166666667 87.13149999999999 L 136.86145833333333 87.13149999999999 L 136.86145833333333 232.34900000000002 Z"
                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask7iw1577i)"
                                            pathTo="M 85.07604166666667 232.34900000000002 L 85.07604166666667 87.13149999999999 L 136.86145833333333 87.13149999999999 L 136.86145833333333 232.34900000000002 Z"
                                            pathFrom="M 85.07604166666667 232.34900000000002 L 85.07604166666667 232.34900000000002 L 136.86145833333333 232.34900000000002 L 136.86145833333333 232.34900000000002 L 136.86145833333333 232.34900000000002 L 136.86145833333333 232.34900000000002 L 136.86145833333333 232.34900000000002 L 85.07604166666667 232.34900000000002 Z"
                                            cy="87.13049999999998" cx="159.05520833333333" j="1" val="20"
                                            barHeight="145.21750000000003" barWidth="51.78541666666667"></path>
                                        <path id="SvgjsPath3020"
                                            d="M 159.05520833333333 232.34900000000002 L 159.05520833333333 14.522749999999997 L 210.840625 14.522749999999997 L 210.840625 232.34900000000002 Z"
                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask7iw1577i)"
                                            pathTo="M 159.05520833333333 232.34900000000002 L 159.05520833333333 14.522749999999997 L 210.840625 14.522749999999997 L 210.840625 232.34900000000002 Z"
                                            pathFrom="M 159.05520833333333 232.34900000000002 L 159.05520833333333 232.34900000000002 L 210.840625 232.34900000000002 L 210.840625 232.34900000000002 L 210.840625 232.34900000000002 L 210.840625 232.34900000000002 L 210.840625 232.34900000000002 L 159.05520833333333 232.34900000000002 Z"
                                            cy="14.521749999999997" cx="233.034375" j="2" val="30"
                                            barHeight="217.82625000000002" barWidth="51.78541666666667"></path>
                                        <path id="SvgjsPath3022"
                                            d="M 233.034375 232.34900000000002 L 233.034375 87.13149999999999 L 284.8197916666667 87.13149999999999 L 284.8197916666667 232.34900000000002 Z"
                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask7iw1577i)"
                                            pathTo="M 233.034375 232.34900000000002 L 233.034375 87.13149999999999 L 284.8197916666667 87.13149999999999 L 284.8197916666667 232.34900000000002 Z"
                                            pathFrom="M 233.034375 232.34900000000002 L 233.034375 232.34900000000002 L 284.8197916666667 232.34900000000002 L 284.8197916666667 232.34900000000002 L 284.8197916666667 232.34900000000002 L 284.8197916666667 232.34900000000002 L 284.8197916666667 232.34900000000002 L 233.034375 232.34900000000002 Z"
                                            cy="87.13049999999998" cx="307.0135416666667" j="3" val="20"
                                            barHeight="145.21750000000003" barWidth="51.78541666666667"></path>
                                        <path id="SvgjsPath3024"
                                            d="M 307.0135416666667 232.34900000000002 L 307.0135416666667 159.74025 L 358.79895833333336 159.74025 L 358.79895833333336 232.34900000000002 Z"
                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask7iw1577i)"
                                            pathTo="M 307.0135416666667 232.34900000000002 L 307.0135416666667 159.74025 L 358.79895833333336 159.74025 L 358.79895833333336 232.34900000000002 Z"
                                            pathFrom="M 307.0135416666667 232.34900000000002 L 307.0135416666667 232.34900000000002 L 358.79895833333336 232.34900000000002 L 358.79895833333336 232.34900000000002 L 358.79895833333336 232.34900000000002 L 358.79895833333336 232.34900000000002 L 358.79895833333336 232.34900000000002 L 307.0135416666667 232.34900000000002 Z"
                                            cy="159.73925" cx="380.9927083333334" j="4" val="10"
                                            barHeight="72.60875000000001" barWidth="51.78541666666667"></path>
                                        <path id="SvgjsPath3026"
                                            d="M 380.9927083333334 232.34900000000002 L 380.9927083333334 87.13149999999999 L 432.77812500000005 87.13149999999999 L 432.77812500000005 232.34900000000002 Z"
                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask7iw1577i)"
                                            pathTo="M 380.9927083333334 232.34900000000002 L 380.9927083333334 87.13149999999999 L 432.77812500000005 87.13149999999999 L 432.77812500000005 232.34900000000002 Z"
                                            pathFrom="M 380.9927083333334 232.34900000000002 L 380.9927083333334 232.34900000000002 L 432.77812500000005 232.34900000000002 L 432.77812500000005 232.34900000000002 L 432.77812500000005 232.34900000000002 L 432.77812500000005 232.34900000000002 L 432.77812500000005 232.34900000000002 L 380.9927083333334 232.34900000000002 Z"
                                            cy="87.13049999999998" cx="454.97187500000007" j="5" val="20"
                                            barHeight="145.21750000000003" barWidth="51.78541666666667"></path>
                                        <path id="SvgjsPath3028"
                                            d="M 454.97187500000007 232.34900000000002 L 454.97187500000007 14.522749999999997 L 506.75729166666673 14.522749999999997 L 506.75729166666673 232.34900000000002 Z"
                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask7iw1577i)"
                                            pathTo="M 454.97187500000007 232.34900000000002 L 454.97187500000007 14.522749999999997 L 506.75729166666673 14.522749999999997 L 506.75729166666673 232.34900000000002 Z"
                                            pathFrom="M 454.97187500000007 232.34900000000002 L 454.97187500000007 232.34900000000002 L 506.75729166666673 232.34900000000002 L 506.75729166666673 232.34900000000002 L 506.75729166666673 232.34900000000002 L 506.75729166666673 232.34900000000002 L 506.75729166666673 232.34900000000002 L 454.97187500000007 232.34900000000002 Z"
                                            cy="14.521749999999997" cx="528.9510416666667" j="6" val="30"
                                            barHeight="217.82625000000002" barWidth="51.78541666666667"></path>
                                        <path id="SvgjsPath3030"
                                            d="M 528.9510416666667 232.34900000000002 L 528.9510416666667 87.13149999999999 L 580.7364583333334 87.13149999999999 L 580.7364583333334 232.34900000000002 Z"
                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask7iw1577i)"
                                            pathTo="M 528.9510416666667 232.34900000000002 L 528.9510416666667 87.13149999999999 L 580.7364583333334 87.13149999999999 L 580.7364583333334 232.34900000000002 Z"
                                            pathFrom="M 528.9510416666667 232.34900000000002 L 528.9510416666667 232.34900000000002 L 580.7364583333334 232.34900000000002 L 580.7364583333334 232.34900000000002 L 580.7364583333334 232.34900000000002 L 580.7364583333334 232.34900000000002 L 580.7364583333334 232.34900000000002 L 528.9510416666667 232.34900000000002 Z"
                                            cy="87.13049999999998" cx="602.9302083333333" j="7" val="20"
                                            barHeight="145.21750000000003" barWidth="51.78541666666667"></path>
                                        <path id="SvgjsPath3032"
                                            d="M 602.9302083333333 232.34900000000002 L 602.9302083333333 159.74025 L 654.715625 159.74025 L 654.715625 232.34900000000002 Z"
                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask7iw1577i)"
                                            pathTo="M 602.9302083333333 232.34900000000002 L 602.9302083333333 159.74025 L 654.715625 159.74025 L 654.715625 232.34900000000002 Z"
                                            pathFrom="M 602.9302083333333 232.34900000000002 L 602.9302083333333 232.34900000000002 L 654.715625 232.34900000000002 L 654.715625 232.34900000000002 L 654.715625 232.34900000000002 L 654.715625 232.34900000000002 L 654.715625 232.34900000000002 L 602.9302083333333 232.34900000000002 Z"
                                            cy="159.73925" cx="676.909375" j="8" val="10"
                                            barHeight="72.60875000000001" barWidth="51.78541666666667"></path>
                                        <path id="SvgjsPath3034"
                                            d="M 676.909375 232.34900000000002 L 676.909375 87.13149999999999 L 728.6947916666667 87.13149999999999 L 728.6947916666667 232.34900000000002 Z"
                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask7iw1577i)"
                                            pathTo="M 676.909375 232.34900000000002 L 676.909375 87.13149999999999 L 728.6947916666667 87.13149999999999 L 728.6947916666667 232.34900000000002 Z"
                                            pathFrom="M 676.909375 232.34900000000002 L 676.909375 232.34900000000002 L 728.6947916666667 232.34900000000002 L 728.6947916666667 232.34900000000002 L 728.6947916666667 232.34900000000002 L 728.6947916666667 232.34900000000002 L 728.6947916666667 232.34900000000002 L 676.909375 232.34900000000002 Z"
                                            cy="87.13049999999998" cx="750.8885416666666" j="9" val="20"
                                            barHeight="145.21750000000003" barWidth="51.78541666666667"></path>
                                        <path id="SvgjsPath3036"
                                            d="M 750.8885416666666 232.34900000000002 L 750.8885416666666 14.522749999999997 L 802.6739583333333 14.522749999999997 L 802.6739583333333 232.34900000000002 Z"
                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask7iw1577i)"
                                            pathTo="M 750.8885416666666 232.34900000000002 L 750.8885416666666 14.522749999999997 L 802.6739583333333 14.522749999999997 L 802.6739583333333 232.34900000000002 Z"
                                            pathFrom="M 750.8885416666666 232.34900000000002 L 750.8885416666666 232.34900000000002 L 802.6739583333333 232.34900000000002 L 802.6739583333333 232.34900000000002 L 802.6739583333333 232.34900000000002 L 802.6739583333333 232.34900000000002 L 802.6739583333333 232.34900000000002 L 750.8885416666666 232.34900000000002 Z"
                                            cy="14.521749999999997" cx="824.8677083333332" j="10" val="30"
                                            barHeight="217.82625000000002" barWidth="51.78541666666667"></path>
                                        <path id="SvgjsPath3038"
                                            d="M 824.8677083333332 232.34900000000002 L 824.8677083333332 87.13149999999999 L 876.6531249999999 87.13149999999999 L 876.6531249999999 232.34900000000002 Z"
                                            fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask7iw1577i)"
                                            pathTo="M 824.8677083333332 232.34900000000002 L 824.8677083333332 87.13149999999999 L 876.6531249999999 87.13149999999999 L 876.6531249999999 232.34900000000002 Z"
                                            pathFrom="M 824.8677083333332 232.34900000000002 L 824.8677083333332 232.34900000000002 L 876.6531249999999 232.34900000000002 L 876.6531249999999 232.34900000000002 L 876.6531249999999 232.34900000000002 L 876.6531249999999 232.34900000000002 L 876.6531249999999 232.34900000000002 L 824.8677083333332 232.34900000000002 Z"
                                            cy="87.13049999999998" cx="898.8468749999998" j="11" val="20"
                                            barHeight="145.21750000000003" barWidth="51.78541666666667"></path>
                                        <g id="SvgjsG3013" class="apexcharts-bar-goals-markers">
                                            <g id="SvgjsG3015" className="apexcharts-bar-goals-groups"
                                                class="apexcharts-hidden-element-shown"
                                                clip-path="url(#gridRectMarkerMask7iw1577i)"></g>
                                            <g id="SvgjsG3017" className="apexcharts-bar-goals-groups"
                                                class="apexcharts-hidden-element-shown"
                                                clip-path="url(#gridRectMarkerMask7iw1577i)"></g>
                                            <g id="SvgjsG3019" className="apexcharts-bar-goals-groups"
                                                class="apexcharts-hidden-element-shown"
                                                clip-path="url(#gridRectMarkerMask7iw1577i)"></g>
                                            <g id="SvgjsG3021" className="apexcharts-bar-goals-groups"
                                                class="apexcharts-hidden-element-shown"
                                                clip-path="url(#gridRectMarkerMask7iw1577i)"></g>
                                            <g id="SvgjsG3023" className="apexcharts-bar-goals-groups"
                                                class="apexcharts-hidden-element-shown"
                                                clip-path="url(#gridRectMarkerMask7iw1577i)"></g>
                                            <g id="SvgjsG3025" className="apexcharts-bar-goals-groups"
                                                class="apexcharts-hidden-element-shown"
                                                clip-path="url(#gridRectMarkerMask7iw1577i)"></g>
                                            <g id="SvgjsG3027" className="apexcharts-bar-goals-groups"
                                                class="apexcharts-hidden-element-shown"
                                                clip-path="url(#gridRectMarkerMask7iw1577i)"></g>
                                            <g id="SvgjsG3029" className="apexcharts-bar-goals-groups"
                                                class="apexcharts-hidden-element-shown"
                                                clip-path="url(#gridRectMarkerMask7iw1577i)"></g>
                                            <g id="SvgjsG3031" className="apexcharts-bar-goals-groups"
                                                class="apexcharts-hidden-element-shown"
                                                clip-path="url(#gridRectMarkerMask7iw1577i)"></g>
                                            <g id="SvgjsG3033" className="apexcharts-bar-goals-groups"
                                                class="apexcharts-hidden-element-shown"
                                                clip-path="url(#gridRectMarkerMask7iw1577i)"></g>
                                            <g id="SvgjsG3035" className="apexcharts-bar-goals-groups"
                                                class="apexcharts-hidden-element-shown"
                                                clip-path="url(#gridRectMarkerMask7iw1577i)"></g>
                                            <g id="SvgjsG3037" className="apexcharts-bar-goals-groups"
                                                class="apexcharts-hidden-element-shown"
                                                clip-path="url(#gridRectMarkerMask7iw1577i)"></g>
                                        </g>
                                        <g id="SvgjsG3014"
                                            class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                    </g>
                                    <g id="SvgjsG3012" class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                        data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine3063" x1="0" y1="0" x2="887.75"
                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine3064" x1="0" y1="0" x2="887.75"
                                    y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG3065" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG3066" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                        <text id="SvgjsText3068" font-family="Helvetica, Arial, sans-serif"
                                            x="36.989583333333336" y="261.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan3069">Jan</tspan>
                                            <title>Jan</title>
                                        </text><text id="SvgjsText3071" font-family="Helvetica, Arial, sans-serif"
                                            x="110.96875" y="261.348" text-anchor="middle" dominant-baseline="auto"
                                            font-size="12px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan3072">Feb</tspan>
                                            <title>Feb</title>
                                        </text><text id="SvgjsText3074" font-family="Helvetica, Arial, sans-serif"
                                            x="184.94791666666666" y="261.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan3075">Mar</tspan>
                                            <title>Mar</title>
                                        </text><text id="SvgjsText3077" font-family="Helvetica, Arial, sans-serif"
                                            x="258.92708333333337" y="261.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan3078">Apr</tspan>
                                            <title>Apr</title>
                                        </text><text id="SvgjsText3080" font-family="Helvetica, Arial, sans-serif"
                                            x="332.90625000000006" y="261.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan3081">May</tspan>
                                            <title>May</title>
                                        </text><text id="SvgjsText3083" font-family="Helvetica, Arial, sans-serif"
                                            x="406.88541666666674" y="261.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan3084">Jun</tspan>
                                            <title>Jun</title>
                                        </text><text id="SvgjsText3086" font-family="Helvetica, Arial, sans-serif"
                                            x="480.8645833333334" y="261.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan3087">Jul</tspan>
                                            <title>Jul</title>
                                        </text><text id="SvgjsText3089" font-family="Helvetica, Arial, sans-serif"
                                            x="554.84375" y="261.348" text-anchor="middle" dominant-baseline="auto"
                                            font-size="12px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan3090">Aug</tspan>
                                            <title>Aug</title>
                                        </text><text id="SvgjsText3092" font-family="Helvetica, Arial, sans-serif"
                                            x="628.8229166666666" y="261.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan3093">Sep</tspan>
                                            <title>Sep</title>
                                        </text><text id="SvgjsText3095" font-family="Helvetica, Arial, sans-serif"
                                            x="702.8020833333333" y="261.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan3096">Oct</tspan>
                                            <title>Oct</title>
                                        </text><text id="SvgjsText3098" font-family="Helvetica, Arial, sans-serif"
                                            x="776.7812499999999" y="261.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan3099">Nov</tspan>
                                            <title>Nov</title>
                                        </text><text id="SvgjsText3101" font-family="Helvetica, Arial, sans-serif"
                                            x="850.7604166666665" y="261.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan3102">Dec</tspan>
                                            <title>Dec</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG3121" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG3122" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG3123" class="apexcharts-point-annotations"></g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
