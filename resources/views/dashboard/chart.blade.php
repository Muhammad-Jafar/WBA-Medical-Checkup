{{-- @include('dashboard.charts.chart') --}}
<div class="row">
    <div class="col-12 col-lg-9">
        <div class="card">
            <div class="card-header">
                <h4>Grafik permintaan per bulan</h4>
            </div>
            <div class="card-body">

                {{-- <div id="chart-last-request">
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
                                        </text>
                                    </g>
                                </g>
                                <g id="SvgjsG3121" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG3122" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG3123" class="apexcharts-point-annotations"></g>
                            </g>
                        </svg>
                    </div>
                </div> --}}

                {{-- <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">Januari:</h6>
                            </div>
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">16</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">Februari</h6>
                            </div>
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">24</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">Maret</h6>
                            </div>
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">20</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">April:</h6>
                            </div>
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">16</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">Mei</h6>
                            </div>
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">24</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">Juni</h6>
                            </div>
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">20</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">Juli:</h6>
                            </div>
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">16</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">Agustus</h6>
                            </div>
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">24</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">September</h6>
                            </div>
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">20</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">Oktober:</h6>
                            </div>
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">16</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">November</h6>
                            </div>
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">24</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">Desember</h6>
                            </div>
                            <div class="col-4 col-md-4">
                                <h6 class="mb-0">20</h6>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>

    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-header">
                <h4>Permintaan Bulan ini</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    
                    <div class="col-7">
                        <div class="d-flex align-item-center">
                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill"></use>
                            </svg>
                            <h5 class="mb-0 ms-3">Minggu 1</h5>
                        </div>
                    </div>
                    <div class="col-5">
                        <h5 class="mb-0 text-end">16</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-europe" style="min-height: 95px;">
                            <div id="apexchartsseex526s"
                                class="apexcharts-canvas apexchartsseex526s apexcharts-theme-light"
                                style="width: 264px; height: 80px;"><svg id="SvgjsSvg2943" width="264"
                                    height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="264" height="80">
                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                            style="max-height: 40px;"></div>
                                    </foreignObject>
                                    <rect id="SvgjsRect2950" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG2990" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-8, 0)">
                                        <g id="SvgjsG2991" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG2945" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(22, 30)">
                                        <defs id="SvgjsDefs2944">
                                            <clipPath id="gridRectMaskseex526s">
                                                <rect id="SvgjsRect2954" width="238" height="47" x="-4" y="-6"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskseex526s"></clipPath>
                                            <clipPath id="nonForecastMaskseex526s"></clipPath>
                                            <clipPath id="gridRectMarkerMaskseex526s">
                                                <rect id="SvgjsRect2955" width="236" height="39" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient2960" x1="0"
                                                y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop2961" stop-opacity="0.65"
                                                    stop-color="rgba(83,80,233,0.65)" offset="0"></stop>
                                                <stop id="SvgjsStop2962" stop-opacity="0.5"
                                                    stop-color="rgba(169,168,244,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop2963" stop-opacity="0.5"
                                                    stop-color="rgba(169,168,244,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine2951" x1="211.32608695652175" y1="0"
                                            x2="211.32608695652175" y2="35" stroke="#b6b6b6"
                                            stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                            x="211.32608695652175" y="0" width="1" height="18" fill="#b1b9c4"
                                            filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG2966" class="apexcharts-grid">
                                            <g id="SvgjsG2967" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine2970" x1="0" y1="0"
                                                    x2="232" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2971" x1="0" y1="5"
                                                    x2="232" y2="5" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2972" x1="0" y1="10"
                                                    x2="232" y2="10" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2973" x1="0" y1="15"
                                                    x2="232" y2="15" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2974" x1="0" y1="20"
                                                    x2="232" y2="20" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2975" x1="0" y1="25"
                                                    x2="232" y2="25" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2976" x1="0" y1="30"
                                                    x2="232" y2="30" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2977" x1="0" y1="35"
                                                    x2="232" y2="35" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2968" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine2979" x1="0" y1="35" x2="232"
                                                y2="35" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2978" x1="0" y1="1" x2="0"
                                                y2="35" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2969" class="apexcharts-grid-borders" style="display: none;">
                                        </g>
                                        <g id="SvgjsG2956" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG2957" class="apexcharts-series" zIndex="0"
                                                seriesName="series1" data:longestSeries="true" rel="1"
                                                data:realIndex="0">
                                                <path id="SvgjsPath2964"
                                                    d="M 0 35 L 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75 L 232 35 L 0 35M 0 29.5z"
                                                    fill="url(#SvgjsLinearGradient2960)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskseex526s)"
                                                    pathTo="M 0 35 L 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75 L 232 35 L 0 35M 0 29.5z"
                                                    pathFrom="M -1 45 L -1 45 L 30.260869565217394 45 L 50.434782608695656 45 L 70.60869565217392 45 L 90.78260869565217 45 L 110.95652173913044 45 L 131.1304347826087 45 L 151.30434782608697 45 L 171.47826086956522 45 L 191.6521739130435 45 L 211.82608695652175 45 L 232 45">
                                                </path>
                                                <path id="SvgjsPath2965"
                                                    d="M 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75"
                                                    fill="none" fill-opacity="1" stroke="#5350e9"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskseex526s)"
                                                    pathTo="M 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75"
                                                    pathFrom="M -1 45 L -1 45 L 30.260869565217394 45 L 50.434782608695656 45 L 70.60869565217392 45 L 90.78260869565217 45 L 110.95652173913044 45 L 131.1304347826087 45 L 151.30434782608697 45 L 171.47826086956522 45 L 191.6521739130435 45 L 211.82608695652175 45 L 232 45"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG2958"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2995" r="0" cx="211.82608695652175"
                                                            cy="28"
                                                            class="apexcharts-marker w5yof814c no-pointer-events"
                                                            stroke="#ffffff" fill="#5350e9" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2959" class="apexcharts-datalabels" data:realIndex="0">
                                            </g>
                                        </g>
                                        <line id="SvgjsLine2980" x1="0" y1="0" x2="232"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                            stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                        </line>
                                        <line id="SvgjsLine2981" x1="0" y1="0" x2="232"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG2982" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2983" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG2992" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2993" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2994" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect2996" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect2997" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-selection-rect"></rect>
                                    </g>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-7">
                        <div class="d-flex align-item-center">
                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill"></use>
                            </svg>
                            <h5 class="mb-0 ms-3">Minggu 2</h5>
                        </div>
                    </div>
                    <div class="col-5">
                        <h5 class="mb-0 text-end">24</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-europe" style="min-height: 95px;">
                            <div id="apexchartsseex526s"
                                class="apexcharts-canvas apexchartsseex526s apexcharts-theme-light"
                                style="width: 264px; height: 80px;"><svg id="SvgjsSvg2943" width="264"
                                    height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="264" height="80">
                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                            style="max-height: 40px;"></div>
                                    </foreignObject>
                                    <rect id="SvgjsRect2950" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG2990" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-8, 0)">
                                        <g id="SvgjsG2991" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG2945" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(22, 30)">
                                        <defs id="SvgjsDefs2944">
                                            <clipPath id="gridRectMaskseex526s">
                                                <rect id="SvgjsRect2954" width="238" height="47" x="-4" y="-6"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskseex526s"></clipPath>
                                            <clipPath id="nonForecastMaskseex526s"></clipPath>
                                            <clipPath id="gridRectMarkerMaskseex526s">
                                                <rect id="SvgjsRect2955" width="236" height="39" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient2960" x1="0"
                                                y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop2961" stop-opacity="0.65"
                                                    stop-color="rgba(83,80,233,0.65)" offset="0"></stop>
                                                <stop id="SvgjsStop2962" stop-opacity="0.5"
                                                    stop-color="rgba(169,168,244,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop2963" stop-opacity="0.5"
                                                    stop-color="rgba(169,168,244,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine2951" x1="211.32608695652175" y1="0"
                                            x2="211.32608695652175" y2="35" stroke="#b6b6b6"
                                            stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                            x="211.32608695652175" y="0" width="1" height="18" fill="#b1b9c4"
                                            filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG2966" class="apexcharts-grid">
                                            <g id="SvgjsG2967" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine2970" x1="0" y1="0"
                                                    x2="232" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2971" x1="0" y1="5"
                                                    x2="232" y2="5" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2972" x1="0" y1="10"
                                                    x2="232" y2="10" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2973" x1="0" y1="15"
                                                    x2="232" y2="15" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2974" x1="0" y1="20"
                                                    x2="232" y2="20" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2975" x1="0" y1="25"
                                                    x2="232" y2="25" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2976" x1="0" y1="30"
                                                    x2="232" y2="30" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2977" x1="0" y1="35"
                                                    x2="232" y2="35" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2968" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine2979" x1="0" y1="35" x2="232"
                                                y2="35" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2978" x1="0" y1="1" x2="0"
                                                y2="35" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2969" class="apexcharts-grid-borders" style="display: none;">
                                        </g>
                                        <g id="SvgjsG2956" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG2957" class="apexcharts-series" zIndex="0"
                                                seriesName="series1" data:longestSeries="true" rel="1"
                                                data:realIndex="0">
                                                <path id="SvgjsPath2964"
                                                    d="M 0 35 L 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75 L 232 35 L 0 35M 0 29.5z"
                                                    fill="url(#SvgjsLinearGradient2960)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskseex526s)"
                                                    pathTo="M 0 35 L 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75 L 232 35 L 0 35M 0 29.5z"
                                                    pathFrom="M -1 45 L -1 45 L 30.260869565217394 45 L 50.434782608695656 45 L 70.60869565217392 45 L 90.78260869565217 45 L 110.95652173913044 45 L 131.1304347826087 45 L 151.30434782608697 45 L 171.47826086956522 45 L 191.6521739130435 45 L 211.82608695652175 45 L 232 45">
                                                </path>
                                                <path id="SvgjsPath2965"
                                                    d="M 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75"
                                                    fill="none" fill-opacity="1" stroke="#5350e9"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskseex526s)"
                                                    pathTo="M 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75"
                                                    pathFrom="M -1 45 L -1 45 L 30.260869565217394 45 L 50.434782608695656 45 L 70.60869565217392 45 L 90.78260869565217 45 L 110.95652173913044 45 L 131.1304347826087 45 L 151.30434782608697 45 L 171.47826086956522 45 L 191.6521739130435 45 L 211.82608695652175 45 L 232 45"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG2958"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2995" r="0" cx="211.82608695652175"
                                                            cy="28"
                                                            class="apexcharts-marker w5yof814c no-pointer-events"
                                                            stroke="#ffffff" fill="#5350e9" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2959" class="apexcharts-datalabels" data:realIndex="0">
                                            </g>
                                        </g>
                                        <line id="SvgjsLine2980" x1="0" y1="0" x2="232"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                            stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                        </line>
                                        <line id="SvgjsLine2981" x1="0" y1="0" x2="232"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG2982" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2983" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG2992" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2993" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2994" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect2996" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect2997" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-selection-rect"></rect>
                                    </g>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-7">
                        <div class="d-flex align-item-center">
                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill"></use>
                            </svg>
                            <h5 class="mb-0 ms-3">Minggu 3</h5>
                        </div>
                    </div>
                    <div class="col-5">
                        <h5 class="mb-0 text-end">36</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-europe" style="min-height: 95px;">
                            <div id="apexchartsseex526s"
                                class="apexcharts-canvas apexchartsseex526s apexcharts-theme-light"
                                style="width: 264px; height: 80px;"><svg id="SvgjsSvg2943" width="264"
                                    height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="264" height="80">
                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                            style="max-height: 40px;"></div>
                                    </foreignObject>
                                    <rect id="SvgjsRect2950" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG2990" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-8, 0)">
                                        <g id="SvgjsG2991" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG2945" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(22, 30)">
                                        <defs id="SvgjsDefs2944">
                                            <clipPath id="gridRectMaskseex526s">
                                                <rect id="SvgjsRect2954" width="238" height="47" x="-4" y="-6"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskseex526s"></clipPath>
                                            <clipPath id="nonForecastMaskseex526s"></clipPath>
                                            <clipPath id="gridRectMarkerMaskseex526s">
                                                <rect id="SvgjsRect2955" width="236" height="39" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient2960" x1="0"
                                                y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop2961" stop-opacity="0.65"
                                                    stop-color="rgba(83,80,233,0.65)" offset="0"></stop>
                                                <stop id="SvgjsStop2962" stop-opacity="0.5"
                                                    stop-color="rgba(169,168,244,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop2963" stop-opacity="0.5"
                                                    stop-color="rgba(169,168,244,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine2951" x1="211.32608695652175" y1="0"
                                            x2="211.32608695652175" y2="35" stroke="#b6b6b6"
                                            stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                            x="211.32608695652175" y="0" width="1" height="18" fill="#b1b9c4"
                                            filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG2966" class="apexcharts-grid">
                                            <g id="SvgjsG2967" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine2970" x1="0" y1="0"
                                                    x2="232" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2971" x1="0" y1="5"
                                                    x2="232" y2="5" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2972" x1="0" y1="10"
                                                    x2="232" y2="10" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2973" x1="0" y1="15"
                                                    x2="232" y2="15" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2974" x1="0" y1="20"
                                                    x2="232" y2="20" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2975" x1="0" y1="25"
                                                    x2="232" y2="25" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2976" x1="0" y1="30"
                                                    x2="232" y2="30" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2977" x1="0" y1="35"
                                                    x2="232" y2="35" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2968" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine2979" x1="0" y1="35" x2="232"
                                                y2="35" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2978" x1="0" y1="1" x2="0"
                                                y2="35" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2969" class="apexcharts-grid-borders" style="display: none;">
                                        </g>
                                        <g id="SvgjsG2956" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG2957" class="apexcharts-series" zIndex="0"
                                                seriesName="series1" data:longestSeries="true" rel="1"
                                                data:realIndex="0">
                                                <path id="SvgjsPath2964"
                                                    d="M 0 35 L 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75 L 232 35 L 0 35M 0 29.5z"
                                                    fill="url(#SvgjsLinearGradient2960)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskseex526s)"
                                                    pathTo="M 0 35 L 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75 L 232 35 L 0 35M 0 29.5z"
                                                    pathFrom="M -1 45 L -1 45 L 30.260869565217394 45 L 50.434782608695656 45 L 70.60869565217392 45 L 90.78260869565217 45 L 110.95652173913044 45 L 131.1304347826087 45 L 151.30434782608697 45 L 171.47826086956522 45 L 191.6521739130435 45 L 211.82608695652175 45 L 232 45">
                                                </path>
                                                <path id="SvgjsPath2965"
                                                    d="M 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75"
                                                    fill="none" fill-opacity="1" stroke="#5350e9"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskseex526s)"
                                                    pathTo="M 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75"
                                                    pathFrom="M -1 45 L -1 45 L 30.260869565217394 45 L 50.434782608695656 45 L 70.60869565217392 45 L 90.78260869565217 45 L 110.95652173913044 45 L 131.1304347826087 45 L 151.30434782608697 45 L 171.47826086956522 45 L 191.6521739130435 45 L 211.82608695652175 45 L 232 45"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG2958"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2995" r="0" cx="211.82608695652175"
                                                            cy="28"
                                                            class="apexcharts-marker w5yof814c no-pointer-events"
                                                            stroke="#ffffff" fill="#5350e9" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2959" class="apexcharts-datalabels" data:realIndex="0">
                                            </g>
                                        </g>
                                        <line id="SvgjsLine2980" x1="0" y1="0" x2="232"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                            stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                        </line>
                                        <line id="SvgjsLine2981" x1="0" y1="0" x2="232"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG2982" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2983" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG2992" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2993" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2994" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect2996" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect2997" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-selection-rect"></rect>
                                    </g>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-7">
                        <div class="d-flex align-item-center">
                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill"></use>
                            </svg>
                            <h5 class="mb-0 ms-3">Minggu 4</h5>
                        </div>
                    </div>
                    <div class="col-5">
                        <h5 class="mb-0 text-end">64</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-europe" style="min-height: 95px;">
                            <div id="apexchartsseex526s"
                                class="apexcharts-canvas apexchartsseex526s apexcharts-theme-light"
                                style="width: 264px; height: 80px;"><svg id="SvgjsSvg2943" width="264"
                                    height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="264" height="80">
                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                            style="max-height: 40px;"></div>
                                    </foreignObject>
                                    <rect id="SvgjsRect2950" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG2990" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-8, 0)">
                                        <g id="SvgjsG2991" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG2945" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(22, 30)">
                                        <defs id="SvgjsDefs2944">
                                            <clipPath id="gridRectMaskseex526s">
                                                <rect id="SvgjsRect2954" width="238" height="47" x="-4" y="-6"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskseex526s"></clipPath>
                                            <clipPath id="nonForecastMaskseex526s"></clipPath>
                                            <clipPath id="gridRectMarkerMaskseex526s">
                                                <rect id="SvgjsRect2955" width="236" height="39" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient2960" x1="0"
                                                y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop2961" stop-opacity="0.65"
                                                    stop-color="rgba(83,80,233,0.65)" offset="0"></stop>
                                                <stop id="SvgjsStop2962" stop-opacity="0.5"
                                                    stop-color="rgba(169,168,244,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop2963" stop-opacity="0.5"
                                                    stop-color="rgba(169,168,244,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine2951" x1="211.32608695652175" y1="0"
                                            x2="211.32608695652175" y2="35" stroke="#b6b6b6"
                                            stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                            x="211.32608695652175" y="0" width="1" height="18" fill="#b1b9c4"
                                            filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG2966" class="apexcharts-grid">
                                            <g id="SvgjsG2967" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine2970" x1="0" y1="0"
                                                    x2="232" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2971" x1="0" y1="5"
                                                    x2="232" y2="5" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2972" x1="0" y1="10"
                                                    x2="232" y2="10" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2973" x1="0" y1="15"
                                                    x2="232" y2="15" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2974" x1="0" y1="20"
                                                    x2="232" y2="20" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2975" x1="0" y1="25"
                                                    x2="232" y2="25" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2976" x1="0" y1="30"
                                                    x2="232" y2="30" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2977" x1="0" y1="35"
                                                    x2="232" y2="35" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2968" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine2979" x1="0" y1="35" x2="232"
                                                y2="35" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2978" x1="0" y1="1" x2="0"
                                                y2="35" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2969" class="apexcharts-grid-borders" style="display: none;">
                                        </g>
                                        <g id="SvgjsG2956" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG2957" class="apexcharts-series" zIndex="0"
                                                seriesName="series1" data:longestSeries="true" rel="1"
                                                data:realIndex="0">
                                                <path id="SvgjsPath2964"
                                                    d="M 0 35 L 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75 L 232 35 L 0 35M 0 29.5z"
                                                    fill="url(#SvgjsLinearGradient2960)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskseex526s)"
                                                    pathTo="M 0 35 L 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75 L 232 35 L 0 35M 0 29.5z"
                                                    pathFrom="M -1 45 L -1 45 L 30.260869565217394 45 L 50.434782608695656 45 L 70.60869565217392 45 L 90.78260869565217 45 L 110.95652173913044 45 L 131.1304347826087 45 L 151.30434782608697 45 L 171.47826086956522 45 L 191.6521739130435 45 L 211.82608695652175 45 L 232 45">
                                                </path>
                                                <path id="SvgjsPath2965"
                                                    d="M 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75"
                                                    fill="none" fill-opacity="1" stroke="#5350e9"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskseex526s)"
                                                    pathTo="M 0 29.5C3.0465077580970985, 27.033466779184316, 22.057203219963064, 6.287716304912408, 30.260869565217394, 5Q44.87830586000735, 12.45228355973397, 50.434782608695656, 15Q63.921030296046695, 23.00274901985692, 70.60869565217392, 23.5Q84.14059093630111, 17.2592146141241, 90.78260869565217, 18Q104.275233811192, 28.538174862729957, 110.95652173913044, 28Q126.08210372554998, 17.659046371510925, 131.1304347826087, 14.75Q144.88176481305177, 3.3571715179166617, 151.30434782608697, 4.75Q165.40823252487618, 21.506636704693978, 171.47826086956522, 23.5Q185.01015615369244, 17.259214614124097, 191.6521739130435, 18Q205.1447990285833, 28.538174862729957, 211.82608695652175, 28Q229.65098103703733, 16.29280932966137, 232, 14.75"
                                                    pathFrom="M -1 45 L -1 45 L 30.260869565217394 45 L 50.434782608695656 45 L 70.60869565217392 45 L 90.78260869565217 45 L 110.95652173913044 45 L 131.1304347826087 45 L 151.30434782608697 45 L 171.47826086956522 45 L 191.6521739130435 45 L 211.82608695652175 45 L 232 45"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG2958"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2995" r="0" cx="211.82608695652175"
                                                            cy="28"
                                                            class="apexcharts-marker w5yof814c no-pointer-events"
                                                            stroke="#ffffff" fill="#5350e9" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2959" class="apexcharts-datalabels" data:realIndex="0">
                                            </g>
                                        </g>
                                        <line id="SvgjsLine2980" x1="0" y1="0" x2="232"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                            stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                        </line>
                                        <line id="SvgjsLine2981" x1="0" y1="0" x2="232"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG2982" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2983" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG2992" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2993" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2994" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect2996" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect2997" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-selection-rect"></rect>
                                    </g>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
