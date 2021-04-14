<div class="clear clearfix"></div>
<div class="banner mt80" id="#about">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>OFERTAS</h1> </div>
        </div>
    </div>
    <div class="clear clearfix"></div>
    <div class="container">
        <div class="row ">
            <div class="col-md-4 col-xs-12 banner-no-margin">
                <div class="hod">
                    <a href="../ofertodromo/presidente">
                        <button class="btn btn-warning">Presidente</button>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12  banner-no-margin">
                <div class="hod">
                    <a href="../ofertodromo/gobernador">
                        <button class="btn btn-warning">Gobernador</button>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12  banner-no-margin">
                <div class="hod">
                    <a href="../ofertodromo/presidentes-municipales">
                        <button class="btn btn-warning">Presidentes
                            <br>Municipales</button>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12  banner-no-margin">
                <div class="hod">
                    <a href="../ofertodromo/senador">
                        <button class="btn btn-warning">Senadores</button>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12  banner-no-margin ">
                <div class="hod">
                    <a href="../ofertodromo/diputado-local">
                        <button class="btn btn-warning">Diputados
                            <br>Locales</button>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12  banner-no-margin">
                <div class="hod">
                    <a href="../ofertodromo/diputado-federal">
                        <button class="btn btn-warning">Diputados
                            <br>Federales</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .hod {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin: 20px auto;
            width: 100%;
            height: 400px;
            border-radius: 170px;
            background: white;
            text-align: center;
            /*        */
            font-family: 'vtcsupermarketsaleregular';
            font-size: 3em;
            font-weight: lighter;
            letter-spacing: 2px;
            transition: 1s box-shadow;
        }
        
        .hod a {
            color: #00000;
        }
        
        .hod a:hover {
            color: #fff;
            transition: width 2s;
        }
        
        .hod:hover {
            box-shadow: 0 5px 35px 0px rgba(0, 0, 0, .1);
        }
        
        .hod:hover:before,
        .hod:hover:after {
            display: block;
            content: '';
            position: absolute;
            width: 100%;
            height: 400px;
            border-radius: 170px;
            background: #F3CA30;
            /*      */
            z-index: -1;
            animation: 1s clockwise infinite;
        }
        
        .hod:hover:after {
            background: #EFAACB;
            animation: 2s counterclockwise infinite;
        }
        
        @keyframes clockwise {
            0% {
                top: -5px;
                left: 0;
            }
            12% {
                top: -2px;
                left: 2px;
            }
            25% {
                top: 0;
                left: 5px;
            }
            37% {
                top: 2px;
                left: 2px;
            }
            50% {
                top: 5px;
                left: 0;
            }
            62% {
                top: 2px;
                left: -2px;
            }
            75% {
                top: 0;
                left: -5px;
            }
            87% {
                top: -2px;
                left: -2px;
            }
            100% {
                top: -5px;
                left: 0;
            }
        }
        
        @keyframes counterclockwise {
            0% {
                top: -5px;
                right: 0;
            }
            12% {
                top: -2px;
                right: 2px;
            }
            25% {
                top: 0;
                right: 5px;
            }
            37% {
                top: 2px;
                right: 2px;
            }
            50% {
                top: 5px;
                right: 0;
            }
            62% {
                top: 2px;
                right: -2px;
            }
            75% {
                top: 0;
                right: -5px;
            }
            87% {
                top: -2px;
                right: -2px;
            }
            100% {
                top: -5px;
                right: 0;
            }
        }
    </style>