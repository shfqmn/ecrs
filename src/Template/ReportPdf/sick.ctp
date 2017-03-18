<html>
<?php use Datetime; ?>

    <head>
        <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
        <meta name=Generator content="Microsoft Word 14 (filtered)">
        <style>
            <!--
            /* Font Definitions */
            
            @font-face {
                font-family: Tahoma;
                panose-1: 2 11 6 4 3 5 4 4 2 4;
            }
            
            @font-face {
                font-family: "Trebuchet MS";
                panose-1: 2 11 6 3 2 2 2 2 2 4;
            }
            /* Style Definitions */
            
            p.MsoNormal,
            li.MsoNormal,
            div.MsoNormal {
                margin: 0in;
                margin-bottom: .0001pt;
                font-size: 12.0pt;
                font-family: "Times New Roman", "serif";
            }
            
            p.MsoHeader,
            li.MsoHeader,
            div.MsoHeader {
                mso-style-link: "Header Char";
                margin: 0in;
                margin-bottom: .0001pt;
                font-size: 12.0pt;
                font-family: "Times New Roman", "serif";
            }
            
            p.MsoFooter,
            li.MsoFooter,
            div.MsoFooter {
                mso-style-link: "Footer Char";
                margin: 0in;
                margin-bottom: .0001pt;
                font-size: 12.0pt;
                font-family: "Times New Roman", "serif";
            }
            
            p.MsoAcetate,
            li.MsoAcetate,
            div.MsoAcetate {
                mso-style-link: "Balloon Text Char";
                margin: 0in;
                margin-bottom: .0001pt;
                font-size: 8.0pt;
                font-family: "Tahoma", "sans-serif";
            }
            
            span.HeaderChar {
                mso-style-name: "Header Char";
                mso-style-link: Header;
            }
            
            span.FooterChar {
                mso-style-name: "Footer Char";
                mso-style-link: Footer;
            }
            
            span.BalloonTextChar {
                mso-style-name: "Balloon Text Char";
                mso-style-link: "Balloon Text";
                font-family: "Tahoma", "sans-serif";
            }
            /* Page Definitions */
            
            @page WordSection1 {
                size: 8.5in 11.0in;
                margin: .75in .75in .75in 81.0pt;
            }
            
            div.WordSection1 {
                page: WordSection1;
            }
            /* List Definitions */
            
            ol {
                margin-bottom: 0in;
            }
            
            ul {
                margin-bottom: 0in;
            }
            
            -->

        </style>

    </head>

    <body lang=EN-US>

        <div class=WordSection1>
            <p class=MsoHeader>                                                <span lang=SV style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif";
color:black'>UNIVERSITI TEKNOLOGI MARA JOHOR</span><span lang=SV style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>  </span>       <span lang=SV style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif";
color:black'>No. </span><span style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif";
color:black'>Borang _________</span></p>

            <p class=MsoNormal align=center style='text-align:center'><span style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>

            <p class=MsoNormal align=center style='text-align:center'><b><span lang=SV
style='font-family:"Trebuchet MS","sans-serif"'>( BORANG LAPORAN SRK / PEGAWAI
/ STAF BERTUGAS )</span></b></p>

            <p class=MsoNormal><b><span lang=SV style='font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></b></p>

            <p class=MsoNormal><b><span lang=SV style='font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></b></p>

            <p class=MsoNormal style='line-height:150%'><span lang=SV style='font-size:
11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>

            <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse'>
                <tr style='height:16.6pt'>
                    <td width=235 valign=bottom style='width:2.45in;padding:0in 5.4pt 0in 5.4pt;
  height:16.6pt'>
                        <p class=MsoNormal style='line-height:150%'><span lang=SV style='font-size:
  11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>TARIKH :
  <?= explode(' ',$sick->datetime)[0]; ?></span></p>
                    </td>
                    <td width=210 valign=bottom style='width:157.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.6pt'>
                        <p class=MsoNormal style='line-height:150%'><span lang=SV style='font-size:
  11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>MASA : 
  <?= explode(' ',$sick->datetime)[1]." ".explode(' ',$sick->datetime)[2]?></span></p>
                    </td>
                    <td width=205 valign=bottom style='width:153.9pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.6pt'>
                        <p class=MsoNormal style='line-height:150%'><span lang=SV style='font-size:
  11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>NO. TELEFON:
  <?= $sick->user->home_num." / ".$sick->user->hp_num; ?></span></p>
                    </td>
                </tr>
                <tr>
                    <td width=650 colspan=3 valign=bottom style='width:487.8pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='line-height:150%'><span lang=PT-BR style='font-size:11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>NAMA
  PEGAWAI BERTUGAS : <?= $sick->user->name ?></span></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>

            <p class=MsoNormal><b><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>MAKLUMAT
PELAJAR</span></b></p>

            <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse'>
                <tr>
                    <td width=448 colspan=2 valign=top style='width:335.75pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>NAMA:
  <?= $sick->name ?></span></p>
                    </td>
                    <td width=203 valign=top style='width:152.05pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='line-height:150%'><span lang=FI style='font-size:
  11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>NO. TEL:
  <?= $sick->tel ?></span></p>
                    </td>
                </tr>
                <tr>
                    <td width=229 valign=top style='width:171.9pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>NO.
  K/P: <?= $sick->ic ?></span></p>
                    </td>
                    <td width=218 valign=top style='width:163.85pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>NO.
  PELAJAR : <?= $sick->studentNo ?></span></p>
                    </td>
                    <td width=203 valign=top style='width:152.05pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='line-height:150%'><span lang=FI style='font-size:
  11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>KOD KURSUS :
  <?= $sick->courseCode ?></span></p>
                    </td>
                </tr>
                <tr>
                    <td width=650 colspan=3 valign=top style='width:487.8pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>ALAMAT
  (R) :</span></p>
                        <p class=MsoNormal>
                            <div style='p{font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"}'>
                                <?= $this->Text->autoParagraph($sick->homeAddress,['class'=>'MsoNormal']) ?>
                            </div>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width=650 colspan=3 valign=top style='width:487.8pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>ALAMAT
  KOLEJ:</span></p>
                        <div class=MsoNormal>
                            <div lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>
                                <?= $this->Text->autoParagraph($sick->collegeAddress); ?>
                            </div>
                        </div>
                        <p class=MsoNormal><b><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></b></p>
                    </td>
                </tr>
                <tr height=0>
                    <td width=279 style='border:none'></td>
                    <td width=229 style='border:none'></td>
                    <td width=209 style='border:none'></td>
                </tr>
            </table>

            <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>

            <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>

            <p class=MsoNormal><b><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>LAPORAN
:</span></b></p>

            <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none'>
                <tr style='height:140.8pt'>
                    <td width=650 valign=top style='width:487.8pt;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:140.8pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'><?= $this->Text->autoParagraph($sick->notes); ?></span></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>

            <p class=MsoNormal><b><u><span lang=FI style='font-size:11.0pt;font-family:
"Trebuchet MS","sans-serif"'>Untuk Tindakan:</span></u></b></p>

            <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none'>
                <tr>
                    <td width=205 valign=top style='width:153.9pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='line-height:150%'><span lang=FI style='font-size:
  11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>Bhg. HEP
  &amp; Alumni</span></p>
                    </td>
                    <td width=60 valign=top style='width:45.0pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=332 valign=top style='width:248.65pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td width=205 valign=top style='width:153.9pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='line-height:150%'><span lang=FI style='font-size:
  11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>Unit
  Pengurusan Kolej </span></p>
                    </td>
                    <td width=60 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=332 valign=top style='width:248.65pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td width=205 valign=top style='width:153.9pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='line-height:150%'><span lang=FI style='font-size:
  11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>Pegawai
  Kaunseling / CITU</span></p>
                    </td>
                    <td width=60 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=332 valign=top style='width:248.65pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td width=205 valign=top style='width:153.9pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='line-height:150%'><span lang=FI style='font-size:
  11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>Unit
  Tatatertib</span></p>
                    </td>
                    <td width=60 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=332 valign=top style='width:248.65pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td width=205 valign=top style='width:153.9pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='line-height:150%'><span lang=PT-BR style='font-size:11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>Simpanan
  / Fail</span></p>
                    </td>
                    <td width=60 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=332 valign=top style='width:248.65pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr style='height:19.75pt'>
                    <td width=205 valign=top style='width:153.9pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.75pt'>
                        <p class=MsoNormal><span lang=PT-BR style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>Lain-Lain</span></p>
                    </td>
                    <td width=60 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.75pt'>
                        <p class=MsoNormal><span lang=FI style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=332 valign=bottom style='width:248.65pt;border:none;padding:0in 5.4pt 0in 5.4pt;
  height:19.75pt'>
                        <p class=MsoNormal align=center style='text-align:center'><span lang=PT-BR style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>
                        <p class=MsoNormal align=center style='text-align:center'><span lang=PT-BR style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>..........................................................</span></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal style='line-height:150%'><span lang=PT-BR style='font-size:
11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>&nbsp;</span></p>

            <p class=MsoNormal style='line-height:150%'><span lang=PT-BR style='font-size:
11.0pt;line-height:150%;font-family:"Trebuchet MS","sans-serif"'>                                                </span></p>


            <p class=MsoNormal style="position:fixed;bottom:100;right:0"><span lang=PT-BR style='font-size:11.0pt;font-family:"Trebuchet MS","sans-serif"'>Tandatangan
&amp; Cop Pegawai Bertugas      :......................................</span></p>

        </div>

    </body>

</html>
