<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>Lao Romanization Converter - Official Transliteration of Lao</title>
<meta name="author" content="Yongjoon Park" />
<meta name="organization" content="WHO Lao PDR" />
<meta name="keywords" content="lao, laotian, romanization, romanisation, transliteration, converter" />
<meta name="description" content="An online tool to convert Lao to Roman script according to the new official romanization system of the Ministry of Health." />

<style type="text/css">
    .tls { cursor:pointer; font-size:9pt; color:#666666; }
    .bordr { width:94%; color:blue; font-family:'Times New Roman'; font-size:13pt; padding:5px; }
</style>

<!-- import external data -->
<script src="js/data.js"></script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">

</head>
<!-- Body starts -->
<body>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <section id="introduction">
                    <h1 class="title">Lao Romanization Converter</h3>
                    &nbsp;
                    <p>Developed by the <b>Health Information System (HIS) Team, World Health Organization (WHO) Lao PDR</b>.</p>
                    <p>This tool helps you convert a text from <b>Lao to Roman</b> script, a process called <b>romanization</b> or <b>transliteration</b>.</p>
                    <p>The romanization is based on the <b>new romanization system (MoH 2020 System)</b> by the <b>Ministry of Health (MoH)</b>, Lao PDR.</p>
                    &nbsp;

                <div align="center">

                    <form name="script">
                        <table width="100%">
                            <tr align="center">

                            <td width="50%"> Lao Script <br> <textarea name="lao" rows="20" onKeyUp="converter()" class="bordr"></textarea> <br> <br>
                            <input type="button" class="tls" onClick="script.lao.select(); copy1()" value="Select">
                            &nbsp; &nbsp;
                            <input type="button" class="tls" onClick="reset(); script.lao.focus()" value="clear">
                            </td>

                            <td width="50%"> Roman Script <br> <textarea name="roman" rows="20" class="bordr"></textarea> <br> <br>
                            <input type="button" class="tls" onClick="script.roman.select(); copy2()" value="Select">
                            &nbsp; &nbsp;
                            <input type="button" class="tls" onClick="reset(); script.roman.focus()" value="clear">
                            </td>

                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>