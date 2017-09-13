

<?php $this->load->view('user/header' );   ?>
<br><br><br>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>

</title>

    <script type="text/javascript">
        function validateAndHighlight() {
            for (var i = 0; i < Page_Validators.length; i++) {
                var val = Page_Validators[i];
                var ctrl = document.getElementById(val.controltovalidate);
                if (ctrl != null && ctrl.style != null) {
                    if (!val.isvalid) {
                        ctrl.style.borderColor = '#FF0000';
                        // ctrl.style.backgroundColor = '#fce697';
                    }
                    else {
                        ctrl.style.borderColor = '';
                        ctrl.style.backgroundColor = '';
                    }
                }
            }
        }
    </script>

    
    <script src="https://www.google.com/jsapi" type="text/javascript">
    </script>
    <script src="js/pramukhlib.js"></script>
    <script language="javascript" type="text/javascript">
        google.load("elements", "1", { packages: "transliteration" });

        function onLoad() {
            var options = {
                //Source Language
                sourceLanguage: google.elements.transliteration.LanguageCode.ENGLISH,
                // Destination language to Transliterate
                destinationLanguage: [google.elements.transliteration.LanguageCode.GUJARATI],
                shortcutKey: 'ctrl+g',
                transliterationEnabled: true
            };

            var control = new google.elements.transliteration.TransliterationControl(options);
            control.makeTransliteratable(['txtan']);

        }
        google.setOnLoadCallback(onLoad);
    </script>
    
    <style type="text/css">
        .red {
            color: red;
        }

        .style-1 input[type="text"] {
            padding: 8px;
            border: solid 1px #dcdcdc;
            transition: box-shadow 0.3s, border 0.3s;
        }

        .style-1 select :focus,
        .style-1 select .focus {
            border: solid 1px #707070;
            box-shadow: 0 0 5px 1px #969696;
        }

        .style-1 select {
            padding: 9px;
            border: solid 1px #dcdcdc;
            transition: box-shadow 0.3s, border 0.3s;
        }

            .style-1 select :focus,
            .style-1 select .focus {
                border: solid 1px #707070;
                box-shadow: 0 0 5px 1px #969696;
            }

        /*Btn css*/

        .myButton {
            -moz-box-shadow: 0px 10px 14px -7px #276873;
            -webkit-box-shadow: 0px 10px 14px -7px #276873;
            box-shadow: 0px 10px 14px -7px #276873;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
            background: -moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
            background: -webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
            background: -o-linear-gradient(top, #599bb3 5%, #408c99 100%);
            background: -ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
            background: linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
            background-color: #599bb3;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            border: 1px solid #29668f;
            display: inline-block;
            cursor: pointer;
            color: #ffffff;
            font-family: Arial;
            font-size: 13px;
            font-weight: bold;
            padding: 8px 16px;
            text-decoration: none;
            text-shadow: 0px 1px 0px #3d768a;
        }

            .myButton:hover {
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
                background: -moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
                background: -webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
                background: -o-linear-gradient(top, #408c99 5%, #599bb3 100%);
                background: -ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
                background: linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
                background-color: #408c99;
            }

            .myButton:active {
                position: relative;
                top: 1px;
            }

        .tbl_border_fir {
            border-radius: 87px 0px 87px 0px;
            -moz-border-radius: 87px 0px 87px 0px;
            -webkit-border-radius: 87px 0px 87px 0px;
            border: 4px solid #9F9F9F;
        }

        .col {
            width: 100%;
            word-break: break-all;
            align-content: center;
            align-items: center;
        }

        .gridView {
            table-layout: auto;
            font-weight: 100;
            width: 100%;
        }

        .auto-style1 {
            text-decoration: underline;
        }
    </style>

<link href="/WebResource.axd?d=lwgz3BEaFr8V6rnSnqQ4jZcSJP6BDe0Xs72Hc8dMfZOGOitliN6Ee7koggSb6ZkWjyXv6hFzQfXuOwMSS5GhlUAt8pak_Dj__uv15Nietg-K1N_x6dkVQz0bPsrbSTGL_wRJfVWFyjK3D7SZqCrshg2&amp;t=635622771580000000" type="text/css" rel="stylesheet" /><link href="/WebResource.axd?d=UT1Cj7SEzX8U-GEgOjD-q6HVfVPU9iqe2xLOn9MkwKjcpDuV0HMIzSYF4jO0RGIsa_JT0Qw6S-u70r83tPzm0AzCt0TDX2n95afU_LZAJB9HNj19H0LW0r783AQVX2wOtbN0LtNx7sNW0AbHF2kguw2&amp;t=635622771580000000" type="text/css" rel="stylesheet" /></head>
<body>

    <form method="post" action="./" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=pynGkmcFUV13He1Qd6_TZLc50ZxgFdLR4PqMwf12bF3kZm7z26WeDgGVdNU0NECDibZ3Xf_mU9eTC4_jWRYHcQ2&amp;t=636161038665894255" type="text/javascript"></script>


<script src="/ScriptResource.axd?d=nv7asgRUU0tRmHNR2D6t1Pb5NT316UMcNW2z8v4njEGOFYDKwNs0wz7EIOIneptH0GJ0KHAFN_LMFEsLwnGhfcQ_m1qZCxldnPwry1la2vsm0S1Cw5pQLFuYf0mKClQM-VzsSubahBnARRsKedI7Vw2&amp;t=ffffffffe23b964d" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=D9drwtSJ4hBA6O8UhT6CQl2y4W-XjV3Sh6ZZ4Tae7LAEmSXoM_mPP2iPthSwgJPcxcbW35fY-bJneJIpGaHJktduCs9xQrq1vXc8QIckVbESsEmPePGMf9iwZvUbCWkCi5dFgxhGq1RVyPrRjFvgD8soSNuaDuisR99iQE5hu2M1&amp;t=2a48f442" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="/ScriptResource.axd?d=JnUc-DEDOM5KzzVKtsL1tQpv8S7Qq70Hr7NveA8XEx6cbMtJwz70Kbxyz29Sx47odjDxSwT4RvZ0ZZiJEc39KdBwyuwqvf1dStrf7QY-EiihaMOdOT1jS75s0qTnV_iuTiml4PXxwUc_6hIUJ2N18VYeRYJcjfcU5fbGb1GIsmgqINfVRVrSWECIpGs_-dI10&amp;t=2a48f442" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=pVdHczR8HTv0TYtXLibFoMIgqS8N1KK6cLEm0qvmupK4UNAro_9xxK3dJimTIao-NHce7gl61lNEwlE7sIHC9nM2947R57uPOhgpJeWc0IHaQcz8JV_rIpd3G5jr_zYD23NxbNTAHhGTHy2PzDqq2g2&amp;t=fffffffff65665cf" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=LpGQnoKUSgO3ODsBUs8Gfdotmk2rKAWxSh_oYPEfpXUwvZcy7SZ7BaFIzjs4bAdHF4dNWtD5TEnhS-LpHBnBdovsVGSwFV_9dwc0Dwx-g1vBsWwk7VJshpQ9EhIhLzYL0&amp;t=fffffffff65665cf" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=-qISl4-OkT-7X02E4FisrxuW1Xcx_-jiUSKIqC5RSy9-WScZ57uS-8DdqTNL-NCiqX2wAUUpxMeQuoBt7poRcy4oEmC46OErgTAgor7eAiKQsT-oQ_D0_GfmBYhRdTFA0&amp;t=fffffffff65665cf" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=yU8qy6lBkK3tBrsJLcY-rwHzj1aZ6HafGbIWr9qm2n2LHaJGJd-rBsNf_mdgcJAJF8JOSBEZHCT4488Nn6gUGUHYBbgB9j8vdIvjuoug30AvuDau--zWxJYPAyX8881Y0&amp;t=fffffffff65665cf" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=iC2sD0Al8A6ZX4AVmUco0U8ISqdzA58fJv3NJ5RkpXyrrNxEd_my612d-jpjb6j-QCjC_TkMu0ZV4L8TczMPsb7wqq4IrDiJ0KL3h31TBNY_v_rLIhnMDNGEUSO9FWAB0&amp;t=fffffffff65665cf" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=q85rlLsZEVu9loex9kzISBdmqw2kbyKBqAbYVkLjk7aUpKTLtUrHVKIKl234jhCMvRDz2WSy9NEY75aAgKfjqRJ0oKub8te_MCckkw3YmTHvRjfDHoDqxoIcL5-4KJtr0&amp;t=fffffffff65665cf" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=VXG5HWKmJ5VfT6XbkUxKRmURpuQXLk767xiqUIsz5F8mso_zeeLO4-WUxkDPAO8PY_AWPRjqH9Q3coO5VTQX80wsf9ufd73LvLKvVCKsuEvm3W0grJhlPvU-mxB1_5F60&amp;t=fffffffff65665cf" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=9fVK6SOzqud8-CG5DRcWdZliiRr85SiMNfdC-QVw7M9quf-m5pBzbwbi8vldsZKZ_1OivCDGj4Bt6BaQ_ezWXlRt0Tl_3fl2EHoXoygBPsUwqhMSWqK8XSuz1kvjWXXL0&amp;t=fffffffff65665cf" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=sjnc2GCx94Cxb1ZyngUXYgSQEZ931UWdJ3NSc_GpUut2Q3D0UWHw-LpKuhGbn6DLEApKi5qe8DywWieYxo4qxblaj-R83JU-fR9SMtZwf0hRytnuBeQZzJjLe5huzIxW0&amp;t=fffffffff65665cf" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=fLmPtwBM7iAqsX1ogwShT6Hlm_9G4n350oC_cDr_ylNDOxNrgPdKwDN-fRlsyFwyKrZksEXAbSHeqXTCRHpZWSrzv8KNluNOITYgLRghmg_23ZTT7nZe_tscYT9GmJZc0&amp;t=fffffffff65665cf" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=BtVjqlFfNWRQ4Fv4f6wktfZ8s3TiVi2bOS4LNUeYWhFdB6nufTXEw3VqBjakb4Z5bKDKO8vQWdQxaUR_cR7fgbYP4n-UTLvAq10CTY-ZlD4nR0ZhH-yvPS-QvyfFbT9q0&amp;t=fffffffff65665cf" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
validateAndHighlight();if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="qua+Tbw23wcs3bJprTD+TYihzuttEG7KS0eEIOqdV3cQ/U1Kn0EDPB4Nyqw3g0x6Qa85GALEY8zwc6+QHP2yUDkPZQ92/KR2KWNwF7/mqpeVsQ7fnnYkmuw5ycm8ATIsCU5eFqQAQ0OtIzteww7dMGj1P/Ml/1Jwhh7r5j8U709TDGXGqCBXsmjd5eWi5IEoGVVHVTcyTna4qS1yxSfoxxWFaQp3bKO22MowaaQIycBMzBAgrhrNoqjtCJRMZuxDEt4DqR4V4bU4HtHHcR/20Fsdhybit9OjmUC6KiopsjakjJmb1I7vbaZPOI1bz2IJU4UGWhvq1bKhFotpeVRGV67X0WC2Nqr1kuHHUCpejlrTDwCf4oD4g/5Qu728+ciXH6n7cbaU6Z/rywfJps23Z7q1wv21x+c+efTtDTW5oUozIJdUhWnlxQ0GTzZWLwLdn3pFvrir26PgxfwBSQFblFUb37QCLpilzzTvplkUbuDpKpIqwkwqzQJgQFPBFCaLUP64y6dlJ8nve7tX+i/7UNm950NaHe9JdIO7Rix2RSHrzB2aiJLhBCzHOJAJAsPQuAgz3QcaOHljGMAhnHJR37f1btICEJoXgtCQqji6MHF21XdrFf+sRG+ecjzZ0lo19l+jVZ+utJhj2s2RvRkIQtwbabcxA4s+KiTOKnZU3UOuFNHQdj5vghGPDERw5lr40tSEqwOipvW2Gomii8eA1DIAwWgrWqvhj0dQsmmtsjDr1SFEH//0qJ+Wh8V1GSrdJHbgiiNc2spO2HcZGwFUxxG0KUPzuMEHP79WlJtS1yeEL6PvB32IyONtjzrrGRhscz4g/KfFEiTXGpGbv7BHWbSM2noyGBH3kxZDT+iOphAfT9GdHO3rkwn3lznicInyqbBCAYmTjVqm1EaaITjOUG/35hB4aO+uGINS7eDqswhsf3UWBraSM9hMrfY++FcbFo+3k24U5Jv6il8TzZJkqPrermMrvFI9MeJ8MsMcQScKBHYa7bau+4WYJkHU8rNjrUYHLmajFsbh9cZ1Nv/d23XE/0B6zCqrw+6ZmMsFRU9DZvamKtGTViwYCxeTpE16oMQekI//W5v3uSd3znxZROgmmRYpsGFQhmgcp4gAjvW8wcWEzNmbOnsi8iYjtLydKplqMSIBn7zZL9BR/OWmlPS5qSac05UXhF30/Qv4h5UrgEkQ1kvqCBgJvTs1Y+bb" />
</div>
        <div>
            <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('smContent', 'form1', [], [], [], 90, '');
//]]>
</script>

            <span id="error"></span>
            <div class="tbl_border_fir" style="width: 725px; height: 100%; margin-left: 250px; margin-top: 25px;">
                <table cellpadding="3" cellspacing="3" class="style-1" align="center" style="width: 100%; margin-top: 25px;">
                    <tr>
                        <td colspan="2">
                            <h2 style="text-align: center;">First Information Report(F.I.R)<br />
                                ફરિયાદ (એફ.આઈ.આર) ની નકલ મેળવો<h3 style="text-align: center;">Beta Version</h3>
                            </h2>
                            <h4 style="padding-left: 100px;"><span class="auto-style1">Note </span>:<br />
                                1) (<span style="color: red;">*</span>)Indicates mandatory field</br>
                                    2) Enter your name in Text in English and it will be automatically translated to Gujarati. e.g Dhaval to ધવલ
                            </h4>
                            <h4 style="padding-left: 100px;"><span class="auto-style1">નોધ </span>:<br />
                                1) (<span style="color: red;">*</span>)ફરજિયાત ભરવાનું રહેશે.</br>
                                    
                                2)તમારુ નામ અંગ્રેજી માં લખવું અને તે આપો આપ ગુજરાતી માં અનુવાદિત થઇ જશે. ઉદાહરણ તરીકે Dhaval થી ધવલ

                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="Label9" style="color:Red;">*</span>
                            <span id="Label3">Name of District<br>(જિલ્લાનુ નામ):</span></td>
                        <td>
                            <select name="drpdist" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;drpdist\&#39;,\&#39;\&#39;)&#39;, 0)" id="drpdist" style="width:90%;">
	<option selected="selected" value="0">--Select District--</option>
	<option value="C1">Ahmedabad City</option>
	<option value="D611">Ahmedabad Rural</option>
	<option value="D13">Amreli</option>
	<option value="D20">Anand</option>
	<option value="188">Arvalli</option>
	<option value="D21">Banaskantha</option>
	<option value="D22">Bharuch</option>
	<option value="D23">Bhavnagar</option>
	<option value="190">Botad</option>
	<option value="184">Chhotaudepur</option>
	<option value="D24">Dahod</option>
	<option value="D25">Dang</option>
	<option value="185">Devbhumi Dwarka</option>
	<option value="D26">Gandhinagar</option>
	<option value="186">Gir Somnath</option>
	<option value="D3">Jamnagar</option>
	<option value="D4">Junagadh</option>
	<option value="D5">Kheda</option>
	<option value="D6">Kutch - Bhuj</option>
	<option value="D614">Kutch - Gandhidham</option>
	<option value="187">Mahisagar</option>
	<option value="D7">Mehsana</option>
	<option value="189">Morbi</option>
	<option value="D8">Narmada</option>
	<option value="D9">Navsari</option>
	<option value="D10">Panchmahal</option>
	<option value="D11">Patan</option>
	<option value="D12">Porbandar</option>
	<option value="C3">Rajkot City</option>
	<option value="D14">Rajkot Rural</option>
	<option value="D15">Sabarkantha</option>
	<option value="C2">Surat City</option>
	<option value="D16">Surat Rural</option>
	<option value="D17">Surendranagar</option>
	<option value="D612">Tapi</option>
	<option value="C4">Vadodara City</option>
	<option value="D18">Vadodara Rural</option>
	<option value="D19">Valsad</option>
	<option value="D611">અમદાવાદ ગ્રામ્ય</option>
	<option value="C1">અમદાવાદ શહેર</option>
	<option value="D13">અમરેલી</option>
	<option value="188">અરવલ્લી</option>
	<option value="D20">આણંદ</option>
	<option value="D614">કચ્છ - ગાંધીધામ</option>
	<option value="D6">કચ્છ - ભુજ</option>
	<option value="D5">ખેડા</option>
	<option value="D26">ગાંધીનગર</option>
	<option value="186">ગીર સોમનાથ</option>
	<option value="184">છોટાઉદેપુર</option>
	<option value="D4">જુનાગઢ</option>
	<option value="D3">જામનગર</option>
	<option value="D25">ડાંગ</option>
	<option value="D612">તાપી</option>
	<option value="185">દેવભુમી દ્વારકા</option>
	<option value="D24">દાહોદ</option>
	<option value="D8">નર્મદા</option>
	<option value="D9">નવસારી</option>
	<option value="D10">પંચમહાલ</option>
	<option value="D11">પાટણ</option>
	<option value="D12">પોરબંદર</option>
	<option value="D21">બનાસકાંઠા</option>
	<option value="190">બોટાદ</option>
	<option value="D22">ભરુચ</option>
	<option value="D23">ભાવનગર</option>
	<option value="D7">મહેસાણા</option>
	<option value="187">મહિસાગર</option>
	<option value="189">મોરબી</option>
	<option value="D14">રાજકોટ ગ્રામ્ય</option>
	<option value="C3">રાજકોટ શહેર</option>
	<option value="D18">વડોદરા ગ્રામ્ય</option>
	<option value="C4">વડોદરા શહેર</option>
	<option value="D19">વલસાડ</option>
	<option value="D16">સુરત ગ્રામ્ય</option>
	<option value="C2">સુરત શહેર</option>
	<option value="D17">સુરેન્દ્રનગર</option>
	<option value="D15">સાબરકાંઠા</option>

</select>
                            <span id="reqValQuestionType" class="red" style="visibility:hidden;">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="Label10" style="color:Red;">*</span>
                            <span id="lblpolice">Police Station Name<br>(પોલીસ સ્ટેશનનુ નામ):</span></td>
                        <td>
                            <select name="drppolicestation" id="drppolicestation" style="width:90%;">
	<option value="0">--Select Police Station--</option>

</select>
                            <span id="RequiredFieldValidator3" class="red" style="visibility:hidden;">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="Label2">FIR Number<br />(એફ.આઈ.આર નંબર):</span></td>
                        <td>
                            <input name="txtfn" type="text" id="txtfn" title="FIR Number" placeholder="I/0001/2006" style="width:86%;text-transform: uppercase" />
                            
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span id="lbl">Name Of Accused<br />(આરોપીનુ નામ):</span></td>
                        <td>
                            <table id="RadioButtonList1">
	<tr>
		<td><input id="RadioButtonList1_0" type="radio" name="RadioButtonList1" value="1" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;RadioButtonList1$0\&#39;,\&#39;\&#39;)&#39;, 0)" /><label for="RadioButtonList1_0">Known(જાણીતા)</label></td><td><input id="RadioButtonList1_1" type="radio" name="RadioButtonList1" value="2" checked="checked" /><label for="RadioButtonList1_1">Anonymous(નમુદ નથી)</label></td>
	</tr>
</table></td>
                        
                        
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <span style="display:inline-block;width:110px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;નામ</span>
                            <span style="display:inline-block;width:115px;">&nbsp;&nbsp;પિતા/પતિ/માતા <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;નુ નામ</span>
                            <span style="display:inline-block;width:115px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;અટક</span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <span id="lblba">Name Of Complainant<br />(ફરિયાદીનુ નામ):</span></td>
                        <td>
                            <input name="txtan" id="txtan" placeholder="First Name" type="text" style="width:90px;" />
                            <span style="margin-left: 10px;"></span>
                            <script language="javascript" type="text/javascript">
                                pph = new PramukhPhoneticHandler();
                                pph.convertToIndicIME("txtan", document.getElementById('txtan'), 'gujarati');
                            </script>
                            <input name="txtcmn" id="txtcmn" placeholder="Middle Name" type="text" style="width:90px;" />
                            <span style="margin-left: 10px;"></span>
                            <script language="javascript" type="text/javascript">
                                pph = new PramukhPhoneticHandler();
                                pph.convertToIndicIME("txtcmn", document.getElementById('txtcmn'), 'gujarati');
                            </script>
                            <input name="txtcln" id="txtcln" placeholder="Last Name" type="text" style="width:90px;" />
                            <script language="javascript" type="text/javascript">
                                pph = new PramukhPhoneticHandler();
                                pph.convertToIndicIME("txtcln", document.getElementById('txtcln'), 'gujarati');
                            </script>
                            
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span id="Label7" style="color:Red;">*</span>
                            <span id="Label4">From Date FIR:<br />(એફ.આઈ.આર તારીખ થી)</span>
                        </td>
                        <td>
                            <input name="txtfd" type="text" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;txtfd\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="txtfd" title="Date of FIR" placeholder="dd/mm/yyyy" readonly="readonly" style="width:85%;" />
                            <span id="RequiredFieldValidator13" class="red" style="visibility:hidden;">*</span>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="Label8" style="color:Red;">*</span>
                            <span id="lbltfd">To Date FIR:<br />(એફ.આઈ.આર તારીખ સુધી)</span>
                        </td>
                        <td>
                            <input name="txttd" type="text" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;txttd\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="txttd" title="Date of FIR" placeholder="dd/mm/yyyy" readonly="readonly" style="width:86%;" />
                            <span id="RequiredFieldValidator2" class="red" style="visibility:hidden;">*</span>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <span id="lbls" style="color: red;"></span></td>
                    </tr>
                    


                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="btncl" value="Clear" id="btncl" class="myButton" style="border-style:Inset;width:50%;" />
                        </td>
                        <td>
                            <input type="submit" name="btnsubmit" value="Search / શોધો" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnsubmit&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="btnsubmit" class="myButton" style="border-style:Inset;width:50%;" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <span id="Label1"></span></td>
                    </tr>
                </table>
            </div>
            <script type="text/javascript">
                function Alphabets(event, allowSpaces) {
                    var keys = event.which ? event.which : event.keyCode;
                    if ((keys >= 97 && keys <= 122) || (keys >= 8 && keys <= 9) ||       //lets allow for the small alphabets
                    (keys >= 65 && keys <= 90) ||        //Let us allow the capital letters too
                    ((allowSpaces == true) && (keys == 32))  //allow space conditionally based on the control's choice
               ) {
                        return true;
                    }

                    return false;
                }

                function AcceptAlphabetsOnly(event, allowSpaces) {
                    var keyCode = event.which ? event.which : event.keyCode;

                    if ((keyCode >= 97 && keyCode <= 122) || (keyCode >= 8 && keyCode <= 9) ||       //lets allow for the small alphabets
                    (keyCode >= 65 && keyCode <= 90) ||        //Let us allow the capital letters too
                    ((allowSpaces == true) && (keyCode == 32))  //allow space conditionally based on the control's choice
               ) {
                        return true;
                    }

                    return false;
                };
                function AcceptNumericOnly(event, allowPeriod) {
                    var keyCode = event.which ? event.which : event.keyCode;

                    if ((keyCode >= 48 && keyCode <= 57) ||         //lets allow only numerics 
                        ((allowPeriod == true) && (keyCode == 46))  //allow period conditionally based on the control's choice
                      ) {
                        return true;
                    }

                    return false;
                };

                function Numeric(event, allowPeriod) {
                    var keys = event.which ? event.which : event.keyCode;

                    if ((keys >= 48 && keys <= 57) || keys == 8 ||        //lets allow only numerics and backspace
                        ((allowPeriod == true) && (keys == 46))  //allow period conditionally based on the control's choice
                      ) {
                        return true;
                    }

                    return false;
                }
            </script>
        </div>
        </br>
        <div>
            <div id="fir_listing">
	
                <div>

	</div>
                <div>

	</div>
            
</div>
        </div>
    
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("reqValQuestionType"), document.getElementById("RequiredFieldValidator3"), document.getElementById("RequiredFieldValidator13"), document.getElementById("RequiredFieldValidator2"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var reqValQuestionType = document.all ? document.all["reqValQuestionType"] : document.getElementById("reqValQuestionType");
reqValQuestionType.controltovalidate = "drpdist";
reqValQuestionType.focusOnError = "t";
reqValQuestionType.errormessage = "*";
reqValQuestionType.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
reqValQuestionType.initialvalue = "0";
var RequiredFieldValidator3 = document.all ? document.all["RequiredFieldValidator3"] : document.getElementById("RequiredFieldValidator3");
RequiredFieldValidator3.controltovalidate = "drppolicestation";
RequiredFieldValidator3.focusOnError = "t";
RequiredFieldValidator3.errormessage = "*";
RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator3.initialvalue = "0";
var RequiredFieldValidator13 = document.all ? document.all["RequiredFieldValidator13"] : document.getElementById("RequiredFieldValidator13");
RequiredFieldValidator13.controltovalidate = "txtfd";
RequiredFieldValidator13.focusOnError = "t";
RequiredFieldValidator13.errormessage = "*";
RequiredFieldValidator13.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator13.initialvalue = "";
var RequiredFieldValidator2 = document.all ? document.all["RequiredFieldValidator2"] : document.getElementById("RequiredFieldValidator2");
RequiredFieldValidator2.controltovalidate = "txttd";
RequiredFieldValidator2.focusOnError = "t";
RequiredFieldValidator2.errormessage = "*";
RequiredFieldValidator2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator2.initialvalue = "";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        
document.getElementById('reqValQuestionType').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('reqValQuestionType'));
}

document.getElementById('RequiredFieldValidator3').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator3'));
}

document.getElementById('RequiredFieldValidator13').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator13'));
}
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.CalendarBehavior, {"endDate":"07/14/2017 00:25:30","format":"dd/MM/yyyy","id":"CalendarExtender2"}, null, null, $get("txtfd"));
});

document.getElementById('RequiredFieldValidator2').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator2'));
}
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.CalendarBehavior, {"endDate":"07/14/2017 00:25:30","format":"dd/MM/yyyy","id":"CalendarExtender1"}, null, null, $get("txttd"));
});
//]]>
</script>
</form>
</body>
</html>
<?php $this->load->view('user/footer' );   ?>
