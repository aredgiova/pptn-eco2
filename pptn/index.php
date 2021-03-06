<?php
    //session_start();
    //error_reporting(0);
    //$varsesion=$SESSION["usuario"];
    include "../Save.php";
    $save=new Save(); 
    if($save->getUsuario()==null){
       header('Location:../login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" href="styles1.css">
        <title>PPTN NUMBER</title>
    </head>
    <body class="grid-container">
        <header class="header">
            <div class="logo">
                <img src="img/logo.png" alt="" class="iconos__img">
            </div>
            <!-- <div class="menu">
                <div class="column">
                    <button style="color: #00FFED ;">HELP</button>
                </div>
                <div class="column">
                    <button style="color: #00FFED ;">ACCOUNT</button>
                </div>
                <div class="column">
                    <form class="menu" id="myForm">
                        <input class="column" style="color: #00FFED ;" type="file" id="csvFile" accept=".csv" />
                        <br />
                        <input class="column" style="color: #00FFED ;" id="btnSubmit" type="submit" value="Submit" />
                    </form>
                </div>
            </div> -->
            <div class="menu">
                <button style="color: #00FFED ;">HELP</button>
                <button style="color: #00FFED ;">ACCOUNT</button>
            </div>
        </header>
        <div class="navbar">            
            <div class="opcion">
            <a href="https://phipricefx.com/una-estrategia-de-analisis-tecnico-y-fundamental-con-base-en-el-libro-de-josh-lukeman-the-market-makers-edge/" target="_blank">
                <img src="img/icono1.png" alt="" class="iconos__img" class="pgl">
            </a>
            <h3 class="icono_title">Strategies</h3>
            </div>
            <div class="opcion">
                <a href="https://phipricefx.com/conceptual-issues-in-unconventional-monetary-policy/" target="_blank">
                    <img src="img/icono2.png" alt="" class="iconos__img">
                </a>    
                <h3 class="icono_title">News</h3>
            </div>
            <div class="opcion">
                <a href="https://phipricefx.com/" target="_blank">
                    <img src="img/icono3.png" alt="" class="iconos__img">
                </a>
                <h3 class="icono_title">Share</h3>
            </div>
        </div>
        <main class="main">
                <div class="indicadores">
                <section class="cpadiv">
                    <div class="nameindicador">GBP/USD</div></br>
                    <div class="numberpptn">
                        <div id="gbp_usd"></div>    
                    </div></br>
                    <div class="marguen">
                        <div  class="cverde">
                            <div id="gbp_usd_p"></div>
                        </div>
                        <div class="crojo">
                            <div id="gbp_usd_n"></div>
                        </div>
                    </div>
                </section>
                <section class="cpadiv">
                    <div class="nameindicador">EUR/USD</div></br>
                    <div class="numberpptn">
                        <div id="eur_usd"></div>
                    </div></br>
                    <div class="marguen">
                        <div  class="cverde">
                            <div id="eur_usd_p"></div>
                        </div>
                        <div class="crojo">
                            <div id="eur_usd_n"></div>
                        </div>
                    </div>
                </section>
                <section class="cpadiv">
                    <div class="nameindicador">USD/YEN</div></br>
                    <div class="numberpptn">
                        <div id="usd_yen"></div>
                    </div></br>
                    <div class="marguen">
                        <div  class="cverde">
                            <div id="usd_yen_p"></div>
                        </div>
                        <div class="crojo">
                            <div id="usd_yen_n"></div>
                        </div>
                    </div>
                </section>
                <section class="cpadiv">
                    <div class="nameindicador">GBP/EUR</div></br>
                    <div class="numberpptn">
                        <div id="gbp_eur"></div>
                    </div></br>
                    <div class="marguen">
                        <div  class="cverde">
                            <div id="gbp_eur_p"></div>
                        </div>
                        <div class="crojo">
                            <div id="gbp_eur_n"></div>
                        </div>
                    </div>
                </section>
                <section class="cpadiv">
                    <div class="nameindicador">EUR/YEN</div></br>
                    <div class="numberpptn">
                        <div id="eur_yen"></div>
                    </div></br>
                    <div class="marguen">
                        <div  class="cverde">
                            <div id="eur_yen_p"></div>
                        </div>
                        <div class="crojo">
                            <div id="eur_yen_n"></div>
                        </div>
                    </div>
                </section>
                <section class="cpadiv">
                    <div class="nameindicador">GBP/YEN</div></br>
                    <div class="numberpptn">
                        <div id="gbp_yen"></div>
                    </div></br>
                    <div class="marguen">
                        <div  class="cverde">
                            <div id="gbp_yen_p"></div>
                        </div>
                        <div class="crojo">
                            <div id="gbp_yen_n"></div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <aside class="sidebar">
            </br></br></br>
            <div class="tittle">
                <p style="color: #051687;" >You have done so much effort to succeed, don`t work for other and don`t share your data strategy.</p>
            </div> 
            <div class="text">
                Sharing your strategy is working for others to take out profits that should be yours.
            </div>
            <div class="text">
                Remember that we are a limited group of members, once it is detected through our geographic GPS sharing the information, will automatically cancel your membership.
            </div></br>
            <h4>welcome <?php echo $_SESSION["usuario"]?></h4>
            </br>
            <a href="../logout.php">LogOut</a>
        </aside>
        <script src="https://d3js.org/d3.v4.min.js"></script>
        <script src="code.js"></script> 
    </body>
</html>
