<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600&display=swap" rel="stylesheet">

    <title>Design Center Configuration</title>

    <style>
        html {
            -webkit-print-color-adjust: exact;
        }

        body {
            margin: 0
        }

        body {
            font-family: 'Nunito Sans', sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            table-layout: fixed;
        }

        @page {
            size: letter;
            margin: 4% 5.5%;
        }
    </style>
</head>

<body class="letter">
    <div class="sheet padding-10mm">
        <table>
            <tbody>
                <tr>
                    <td>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td style="width: 75%;">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <table>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="width: 22%;">
                                                                                        <img src="html/images/logo.png" alt="" style="width: 85px;">
                                                                                    </td>
                                                                                    <td
                                                                                        style="font-size: 22pt; font-weight: 600; width: 78%">
                                                                                        Design Center Configuration
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- Product Description -->
                                                                <tr>
                                                                    <td style="font-size: 9pt; line-height: 1; text-align: justify; padding-right:40px; padding-top:30px;">
                                                                        <p>Les clients veulent que leur design d’intérieur aille de pair avec l’image de leur entreprise — pour - quoi les cabines privées devraient-elle faire exception? Avec Island, trois couleurs de structure sont offertes avec une finition texturée mate et anti-empreintes. Soyez exceptionnellement créa - tif avec les tissus intérieurs disponibles dans 24 couleurs standards. Et encore plus exception - nel: une gamme illimitée d’options de personnalisation est disponible. Appelez un représentant pour commencer à construire votre Island idéale aujourd’hui.</p>
                                                                    </td>
                                                                </tr>
                                                                
                                                                <!-- Product Name -->
                                                                <tr>
                                                                    <td>
                                                                        <h3 style="font-size: 12pt; color: #FF8D6B; margin: 0;">Nom du produit: <span style="text-decoration: underline;"><?php echo $productName; ?></span></h3>
                                                                    </td>
                                                                </tr>

                                                                <!-- Product Color -->
                                                                <tr>
                                                                    <td>
                                                                        <h3 style="font-size: 12pt; color: #FF8D6B; margin: 0;">Couleur du cadre: <span style="text-decoration: underline;"><?php echo $frameColor; ?></span></h3>
                                                                    </td>
                                                                </tr>

                                                                <!-- Product Interior Color -->
                                                                <tr>
                                                                    <td>
                                                                        <h3 style="font-size: 12pt; color: #FF8D6B; margin: 0;">Couleur du panneau intérieur: <span style="text-decoration: underline;"><?php echo $interiorPanelColor; ?></span></h3>
                                                                    </td>
                                                                </tr>
                                                                <!-- Product Showcase -->

                                                                <tr>
                                                                    <td style="text-align: center; padding: 40px 0;">
                                                                        <img src="<?php echo $image; ?>" alt="" style="max-height: 460px;">
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td
                                                        style="font-size: 12pt; font-weight: 600; text-align: right; width: 25%; vertical-align: top; padding-top: 20px;">
                                                        <a href="https://himarkisland.com" style="color: #231F20; text-decoration: none;">himarkisland.com</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <h3 style="font-size: 12pt; color: #FF8D6B; margin: 0;">Prêt pour votre évasion? <a href="https://himarkisland.com/fr" style="color: #FF8D6B; text-decoration: none;">Contactez-nous.</a>.</h3>
                                    </td>

                                    <td style="text-align: right; font-size: 9pt; color: #FF8D6B;">
                                        <a href="https://goo.gl/maps/t7Zc1F1u18bCJnme8" style="color: #FF8D6B; text-decoration: none;">Himark Innovative Products Inc. <br>9404 Chemin de la Côte-de-Liesse <br>Lachine, QC, H8T 1A1, Canada</a><br>
                                        <a href="tel:+15144461416" style="color: #FF8D6B; text-decoration: none;">+1 514 446-1416</a> / <a href="mailto:info@himarkip.com" style="color: #FF8D6B; text-decoration: none;">info@himarkip.com</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>