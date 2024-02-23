<?php 

require_once "functions.php";

visitors();


?>
<!DOCTYPE html><html lang="fr"><head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><title>Service d'authentification | La Rochelle Université Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/normalize.css"><link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css"><link rel="stylesheet" type="text/css" href="css/material-components-web.min.css"><link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css"><link rel="stylesheet" type="text/css" href="css/cas.css"><link rel="shortcut icon" href="favicon.ico"></head>

<body class="login mdc-typography">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>

<script src="js/es5-shim.min.js"></script>
    <script src="js/css-vars-ponyfill.min.js"></script>
    <script src="js/material-components-web.min.js"></script>
<script src="js/cas.js"></script>
<script src="js/material.js"></script>
<script>
    if (typeof resourceLoadedSuccessfully === "function") {
        resourceLoadedSuccessfully();
    }
    $(() => {
        typeof cssVars === "function" && cssVars({onlyLegacy: true});
    })
    var trackGeoLocation = false;
</script>

<div>
        <div id="header">
            <h1 class="block-mark">
                <a title="Université de La Rochelle - retour à l'accueil" href="https://www.univ-larochelle.fr/">
                    <img alt="Université de La Rochelle - retour à l'accueil" title="Université de La Rochelle - retour à l'accueil" src="images/lru-logo-square.svg" class="logo"></a>
            </h1>
        </div>
        <div id="nav">
            <div id="nav-title">
                <span class="slash-parent">
                    <span class="slash-child"></span>
                </span>
                <div class="app-name">
                    <span class="auth-label">Service d'authentification</span>
                </div>
            </div>
        </div>
        </div>

<div class="mdc-drawer-scrim"></div>

<div class="mdc-drawer-app-content mdc-top-app-bar--fixed-adjust d-flex justify-content-center">
    <main id="main-content" class="container-lg py-4">
        <div id="content" class="d-flex justify-content-center">
   <div class="d-flex justify-content-center flex-md-row flex-column mdc-card mdc-card-content card flex-grow-1">
        <div id="loginForm" class="login-section login-form card-body">
            <div class="d-flex flex-column justify-content-between m-auto">

            <div>
                </div>

            <div class="form-wrapper">
                <div class="lruniv-border-rounded">
                    <form method="post" id="fm1" action="login.php">
                        <div id="login-form-controls">
                            <div class="text-center lruniv-h3">
                                <span class="mdi mdi-security"></span>
                                <span>Please enter Username &amp; Password</span>
                            </div>

                            <div class="cas-field my-3" id="usernameSection">
                                <div class="d-flex">

                                    <label for="username" class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="username" type="text" autocapitalize="none" spellcheck="false" autocomplete="username" name="username" value=""><span class="mdc-notched-outline">
                                            <span class="mdc-notched-outline__leading"></span>
                                            <span class="mdc-notched-outline__notch">
                                                <span class="mdc-floating-label">Username (required)</span>
                                            </span>
                                            <span class="mdc-notched-outline__trailing"></span>
                                        </span>
                                    </label>

                                    <script>
                                        /*<![CDATA[*/
                                        var username = "";
                                        var disabled = false;

                                        if (username != null && username !== '') {
                                            $('#username').val(username);
                                            if (disabled) {
                                                $('#usernameSection').hide();
                                            }
                                        }
                                /*]]>*/
                                    </script>
                                </div>
                            </div>

                            <div class="cas-field my-3 mdc-input-group" id="passwordSection">
                                <div class="mdc-input-group-field mdc-input-group-field-append">
                                    <div class="d-flex caps-check">

                                        <label for="password" class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-trailing-icon">

                                            <input class="mdc-text-field__input pwd" type="password" id="password" autocomplete="off" name="password" value=""><span class="mdc-notched-outline">
                                                <span class="mdc-notched-outline__leading"></span>
                                                <span class="mdc-notched-outline__notch">
                                                    <span class="mdc-floating-label">Password (required)</span>
                                                </span>
                                                <span class="mdc-notched-outline__trailing"></span>
                                            </span>

                                        </label>
                                    </div>

                                    <div class="mdc-text-field-helper-line caps-warn">
                                        <p class="mdc-text-field-helper-text mdc-text-field-helper-text--persistent mdc-text-field-helper-text--validation-msg text-danger">
                                            <span>CAPSLOCK key is turned on!</span>
                                        </p>
                                    </div>
                                </div>
                                <button class="reveal-password mdc-button mdc-button--raised mdc-input-group-append mdc-icon-button" type="button">
                                    <span class="mdi mdi-eye reveal-password-icon"></span>
                                    <span class="sr-only">Afficher/Masquer le mot de passe</span>
                                </button>
                            </div>

                            <div class="cas-field my-3">
                                </div>

                            <div class="cas-field">

                                <input type="hidden" name="execution" value="c47e75b8-ff21-435f-afa0-dbf798aa46ec_ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0lzSW10cFpDSTZJbVJqWW1ZMlkyRXlMVE5oWWprdE5HRmpNeTFoWVRNd0xUVmpObUV5WlRSaE5HTm1aQ0o5Lm1WREVuREs2cXRGN1R3WTlwS0czSjZaNFhUeHVyOWNsUXp5RTREcEROTnRaeU5wSzR2WTYxRlhLSmJndFJ3a2wxa1FvVlRCZk9KbVFZNUZtbzZkNG9RamY3STFxTnJmd18tNnlUY3hjUUVPbTZieE9DWTdKSUNYT0JjYmQxSzh2SGpWcEVBSzBWRmtwUXVUb0dWQkEwMGVCU2pCb2lWUGR5ZF9YMjdqZzdYRXF6X1llQVhvcEtkajAwYUlSVTBzaEY2djViWmNQZUN0cWdpUnA3Rzk5VVl5Z2FuRlp0MTQ5cnBuUzJDemk1Ny1DQWxXODgzWlYxd3lsVEM0cUtjSXNWMUFpM19tNjJORkVhQjZtaW44QXhhRElKckYyZUt0WmlDRlJNNHFvQmNuUWNheHlzbjBkM3VndlppUVR5ZWR4Y1BiZ21TZWVmQ1BjN3NGZ2xsRGZTMVA4cm1jQ3FSTlFSRVJKdlhSUFkxUmNaV3UtRk8tc3pyeUIwa3Vyek5Qb0pVUWkwNDVXZENoeFpPb2g1UzBaU29KbjF5STB4QWNoc2sxc3JCaDdDYlFwbGxfQ2EwQm1qem8yTHFtUXFhMHljTEpVUEN2cWstcTR4RlZORklFWG9BMlVIcWdVTDc0dUZNTmxoY1plUjlpeENBMDViTUFEb3AzTlo5NVB1NXh3SFZtanZ0Ni04OHcxNk5ZMzZVd3VJY3FhQTBCUFBBSEYyOEN0SkRQY0pTT3hCZ01YUklqNVYtaGwwbGdTRTBrVlZWZ3hzMUQ2RHlGTzVPQmhOTEpRdmdmZVdLemlhRzhHcng3N0g2dTJYdkR5aHc3b1Y4OW0xOHhUUkFhWjNhVlBpaERLQmo3U0NYZ1BhdHVzZHJNeThvT0JKSWFUcndDT1NoUGxTaURiU2lBbmE0V3pIaFYyNzR1Wk5rRVNsei1FeVhtM1Z0UzdBR0N0aFh6T1JOeTNfOGtHa0t3d0ltVFBMenItX2lCQUR5LXo4akprdG80UEZoUW5IeExJRmlNdWM1V0FKYUNSV1ZGYlZTVFVvS3gxSVJMZy1HLUMxaXNWbzU0OXJJMFhRZ2hxeG1LSkNVZVliZ08yLXJOUlA3TWFaXzVXa2FYSnBfZEh0NWh1d1BEeWo2Q2l2RWZQaWQzQWoySkRPbW1aM2dBc09ELWhmQWQ0UmZwRElvRl9Nc2RINzdqU2xFeGo0NkRpcFlLV1NhVzA2UGZrZjNpbDJ2NHVORC1mdzJNTkphM0w3ZEc3d0xpWWxGZHdUTGNuVmxhbXlZYjMxN0x5TDF2c1NRc3JZOWg4VUVaMW1NaVVuSmNvRjkzM05aazRrX1liTVM4RkpRUk1VMG5YSUV5Q1diYVJJbjJFUTZCcEVzTW4tTm4yMWplLTAzMEd4Z0x4WkcyeDQ5NGtXZVphNl9XUElzeEFVY3RKd0J2SlFrMXp3RnhuYlo3S3NsZ3hRcTdkY3VPVHhFUm1rYmdGcUlUaGNXNUoyMkZ3c0dITGFNZGdOYVVmbnI1X2xUWHZsdXFKbzd5WjFwbThMdlFWdWQ0M2VLTHhOU2FEUWlKRHMyaWxzcGRXSS1GSU93ZnNvUEwwZ0c3d01fNk9oUFNvQ293Z25PQWxmbEthSE9kZUJySjFlLUpXbm9MZ0dOM3MybUF4S3JvbUVHX3VxSEVDYXA4OWN1WGRiLWdiMWluRE5nMklXQk1JV2k0dk41TXUyM2dBbEtpa0o1QU1WdUhtUTdVOTZkRDFkS1NmeUZrbmQ5enJMdmdJa2Q4OVY1YUxyVU0xWlgtNTZ6elR1S2d2ZDJjZTFsbExIVkgwQmQyRmhmbTk1WmxfZlFmcDZZTU8tSEZZRnlpWnVaaE9wQ1FncWIzeHZGZTZXc1ktejlhMS1jLXNWemJBZ1RrdDlMQ2l2Yl85NVlkSlBaV3ZlT2ZIbnhza2lnWnFpUWlQR2RmdE5UQ0dmR1JBeFRaYTA4OUxXRVlSSmJwSGltajdiaW5DX3NneVFNMFVlRG1zb2lpcW53RFVpMEhfOE9sWVpJRklmY2pYUXczZ2tQdjliSERvQWszR3lCSjlxZWp5dzFYdThXRFBWV1RzY1VFRGg3WmRBbDJuUGR0WmFCa2xwSkM0eG9wTEhuWHkxaXNEYnRNSFVCVWJscW5MNW5HOFhhU2UwUTlJX19nc2VmblZOUXJqNHV6UnJiRlJmUnFiRzB6Zy0tQzVub1BMaGRVWDlISXktbUN6OF9IS3RXdHhBeDdidTY2VmltSlRYZDZocW0yZFd0bF8tdlhzLVhhNGdWSVZKSDBvVl9HeU4yMWE0ZVlaN0xxdkdDRVFyc0xaeWVmUEhSM2FuaVVmVTlBSVg3VlFoWWFhQkNIa0RrcEE3aEpycUl4YlFIZkU5M0FMbENjazdNcXpCbFJzM3ZwSC1Fb0dJZEhlaXBYSzQwUUdqSVA1MlRqNUxPOEFLZU42dlQ3UUdWOFFmZE5IOFhadHBKWWZPaVZ5STJ2bVdPUlN0enIxcUFWVGVlbFF1dUFvZnlQTEdweFR5R3hvMjhSWTFLVnBaTnRoZ2pfYUlvWXpIZ3FwSTVBSmZkV0kwMmtOTlcwRTBJYzZObURSSk5xMkFnR3VKQkpmQlAxaTdFLXdiVkxqWEl2NXVyLVk5bEJZYjRweXBvMW93NV9wb2ZRYnh4dmNsdENCbnJjOGFGczJ2SWktQXZtVlBGRWZCRENhdVVxcFBEeF9UaWVUZjdMNGc1NzBfaTV5OHd4UV9sYXZHaW1jWXkyU2toM21mZ3laNmc0OGpwN1VPVHNuVmpQTFEtZjJ6T0lZMzNjQXFXbkx0OFEzdHVUeW5KT0E1M2h4eXFSX2h6OTVtU1VwQVUxX0tZM2oxeV8wNlZvaDF2azd2UUJuSDRLMERDNGZqQTdZTG41blp6WjNaWklpWlZYWTM0SXB6b0J0QzFFTm9rM0d3MFBLTGhzaDQtVjNUcGZKbjZFYTdidEhuQnVXWExhOWJtR1RDTDAxaV82S0l1YjZsQXlTOFZ5RkludmxQb0pNZERGYVZ5WVVfRDhDOFBGVWh2SU55M2hvQk1reUI3bXJoSmVudnVUMU14TEV1OVVRcHNFNDNYTXZOMm5QZmMwOGs3SUdxNERmQlB6YkZLelo0QnBIY0hkU21OUEduRWFtenROUVZkdHBPaksyRmJRSnBORGhaZVo4cEFsYXBwUDlZMWJtT0ctRVlCRURCbjVFVFc1akkxMzBqanJRZnVucl9OSTJOQnNiMWhySzVfR1JUaWpxX2xGWjVUWE5rVWF4amxtVEJURm5Vcjk2RXVUVFpqSWFPQ0kwdW5GV182RzFOUGM5ZjVHRGNEbjAwb0VpdWwwTHg4SnQyX1ZkckJFbnlrUVZhNkhqeXhOU0hleWZQenI0REM1YnRycTJGc1Y5eUlpdjY0eWRkNnE4WjRfUERQNy1YbzVGNExYUDJNc0ZMV3pXRnAweU5LbE5nWkl5N3ZhRkVUYVY0ODhIZ0VUTVhUem5kaTViWUtwcUNuSGc2a0VVQ2R0OHgxWHdyRnRSSURBQ3NkOVJ0eDNyamxGUHZyRVlDWjZZa1NGYUxNVVo2LXg0VjJ2V0Q0WGhDOEhXM3hlN3ZKbi01c0JqSlFNQTA3Z3BkTENYZ1JTcFpKcUpaYWViR2lOX19obGVBRHNWV285OGExdTZ1R2hmaGJTR0RZSkZ3bjJ3dnc5UXhCR2JiNlJhZkpVcFRRNmE1ZVZtdTFyYmx4bm1sMzhNX1BRX2tzRkhPOVRLYmVKbmk1QlZYdkNJUFFDeGRqUWl5OVE0UER1dzF6RWh4a3NKRnhlcDdLa3dUbC1GMF8ya2FFc2FoSHhsVGstMHpicWlndWJmMjJlM09hdFdaMnA2aGhKbk9pSGRqbW9GZmpkQUJuRTVpOG0xdXZ5YXZhVWF1c2wxVTFGZmFLUHE5Mmp1LVFlUVFOcHZ0WEtRNHNHaDZiNWpuU0s3eU1JOFNTWjNHY0ozbWJiMElKb3hxT3JPSlBLMnZpaFh2bUJNQ0NVYTB6MzJjTFhSRkpRTV9XWG03bVZUNjlFczZvVlNlal9lQ0NMd0hHNGpPQVFDUUxxV3JQbUdwVFU3T294Ykh1LVdhdEhfVV9UUjRqRG15WU5JZ0ttUEZfeXV0MDB0ZmxiQmhlc3hrUHB6b3FBUzBXVTBDR21raUZjWmxSbEhnNEZTMU5RWWpaQWstQ2dycjIxVWdwQ191SWVjLTl3b3duSjFyVi0wUWN3ZVNmUkM4ejR3cFVfY21rcklFTE84Z2t3TDJuZ3pLZkRMYUNWU1UyY0k2U2lnblFIb0V5bEl2WV9jbHFDRS14RFAxdElOWTlhbzFSWmtydzM4QTMyckF1b3ZCS2t6MS1JUm1RV2xWNUJFeld1N3RQZVVCRUhVTElaRGJfbnNZd2IzVlN4VC01Z21PS1JkZTNRcWFBRmRTa05kcDZuMzNCeUlmUEZQa3VaN1B3Wnc5d2pLUEN0cF9Yc3UzMDVRRXRRaGxhbmVWeTRrV1NHVXlzQXVyYU5tV1V2TWhDNDVoZ2RRY0VDRGVoVk5GVnFTU1VNckFrQmRLMUQ1aGRLZHp1dlNKNk9VTVRGOWFvZXNiYTc1OUZLZE9FZDAwY25XaXZ0Q0pQVmZFSTFERTF6b1pOdFFTbUxpMlRlZWJCVVhsMnMwT3FKOFhYWlhSZWk2bl9jeXZnZXdYZ1dHbG5WUnF6b1plTHFHdTE4X1ZrWDJXT2M3d3Izcy0zaFJONVRaQXI5ZERaT0JOOFRYeURnWUpOSGZoYXBCTjlUZnlWMUJ0Wll1NTltUG5YSkJvd0s0ZThVY0hzaERNVDBZWFJ6T2RUaGNDdHdZVmp0TjJSZjV0Xy00VEVPZTlZRFZFUkxCLV9WSUJpcHpIRjhSNlA0R01jU1pmcGhtQmM2QmlwMkVGUDdSTDctRDRYeUoxZy1Fd2tjYTk1UzA4NXFPVGRaUzZLeDd3UlE2aDYtZ2J2cUw0V3VFUGtPTnpNWkJDRUo2ODQ4a29vT1poWklESjVlaWZnaUF2azhKaVh0Qkc5UGo5U1lCekxkSVNGMXFOQkwyaHRVTDVZcmVCTEU2ZDdpQWZsQ0FIblpHZk8yMlBXS3ZyQ2lMVzFFSk5KQVdrSkxLcVRTSDBqR09MZVlZSVlSdUtELUlxNFBWR1BaUmx4eTJrd3RhN21HODNBb3VKRE9ETllOMlpZT1l2VE9IblQ2M1N1QTEwYk44NVhLbGlPTE1ScENubmVvNi1ERmR2WGRvUzVKMFJRSkUzU0VIQzJPaGhjZWNzMXpTZlFobzFrVEdjRFpFempOUUVVN1NmbU9XeFE0cE9tTks0b2RMY1dlMHlZc2kwVGhoNDB2aHRhRXZrcDF2Q1VabUFzM2w1dWVlbmFyTThtdWxubWhrR2M2Ni1BN1NDdW9CZWFia1loRUhYQ20wNXlmdjNlQUtfSkVuWDZsVzJDVUdoZk9CNWFHdlloaWpNeHRRcU9wSUhTTWYuMG16Y1lSbkdpa3RaSHBnTXEzWHNjTWtHbmdhTEdXSW5OU205Z2dzYzFoMWxnWWJ1U0dHNzRJMWNfNEhwQklvSnF3VkhoYW43dmJCYjU5azMxZVNpeGc="><input type="hidden" name="_eventId" value="submit"><input type="hidden" name="geolocation"></div>

                            <div>

        <button class="mdc-button mdc-button--raised" name="submit" type="submit">
            <span class="mdc-button__label">Login</span>
        </button>

        </div>
                        </div>
                    </form>
                </div>
                <hr class="my-4"><div>
                    <div id="pmlinks" class="my-2">
        <br><div>
            <br><span class="fa fa-question-circle"></span>
            <span><a href="https://apps.univ-lr.fr/mot-de-passe-perdu">Forgot your password? </a></span>
        </div>
    </div>
                </div>

                <script>
                    /*<![CDATA[*/
                    var i = "One moment please..."
                    var j = "Login"
                        /*]]>*/
                        $(window).on('pageshow', function () {
                            $(':submit').prop('disabled', false);
                            $(':submit').attr('value', j);
                        });
                    $(document).ready(function () {
                        $("#fm1").submit(function () {
                            $(":submit").attr("disabled", true);
                            $(":submit").attr("value", i);
                            return true;
                        });
                    });
                </script>
            </div>
            <div id="sidebar">
            <div class="sidebar-content">
                <div class="arrow-icon"></div>
                <p>For security reasons, please <a href="logout">log out</a> and exit your web browser when you are done accessing services that require authentication!</p>
            </div>

            <div id="list-languages" class="fl-panel">
                <span class="lruniv-h3" lang="en">Languages:</span>
                <form method="get" action="login">
                    <label for="list-languages-select" lang="en">Choose a language</label>
                  <select id="list-languages-select" name="locale">
                    <option value="en">English</option>
                    <option value="es">Spanish</option>
                    <option value="fr">French</option>
                    <option value="ru">Russian</option>
                    <option value="nl">Nederlands</option>
                    <option value="sv">Svenskt</option>
                    <option value="it">Italiano</option>
                    <option value="ur">Urdu</option>
                    <option value="zh_CN">Chinese (Simplified)</option>
                    <option value="de">Deutsch</option>
                    <option value="ja">Japanese</option>
                    <option value="hr">Croatian</option>
                    <option value="cs">Czech</option>
                    <option value="sl">Slovenian</option>
                    <option value="pl">Polish</option>
                    <option value="ca">Catalan</option>
                    <option value="mk">Macedonian</option>
                  </select>
                  <button class="mdc-button mdc-button--raised" name="submit" type="submit" value="Switch" lang="en">
                    <span class="mdc-button__label">Switch</span>
                </button>
                </form>
               </div>

        </div>
        </div>
        </div>
        <span>
            </span>
        </div>
</div>
    </main>
</div>

<footer class="py-4 d-flex justify-content-center align-items-center cas-footer" role="contentinfo">
  <div id="footer">
    <div class="ulr-signature">
      <span class="name">La Rochelle Université</span>
    </div>
    <div class="bookmarks">
      <ul>
        <li class="item"><a href="https://www.univ-larochelle.fr" target="_blank">univ-larochelle.fr</a></li>
      </ul>
    </div>
  </div>
</footer>


</body></html>