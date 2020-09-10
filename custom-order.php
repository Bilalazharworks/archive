<!-- Header -->
<?php include 'partials/header.php'; ?>

<?php include 'partials/recaptcha-script.php'; ?>

<section class="custom-order">
    <!-- Form -->
    <form id="custom-order-form" method="POST" action="<?php echo BASE_URL; ?>inc/order-mail.php">
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" value="">
        <input type="hidden" name="action" value="validate_captcha">

        <input type="hidden" name="message_success" value="Your order has been created. We'll get back to you soon.">
        <input type="hidden" name="message_error" value="Failed to create your order. Please try later or contact administrator directly.">

        <!-- Contact Information -->
        <div class="container">
            <div class="top-text">
                <h2 class="section-title section-title--black sr-element fade-up" data-delay="150">Custom order form</h2>
            </div>

            <div class="order-form-wrapper">
                <div class="col-left">
                    <div class="fields-wrapper">
                        <div class="input-wrapper sr-element fade-up w-50" data-delay="200">
                            <input type="text" name="customer_name" value="" placeholder="Customer name *" required>
                        </div>

                        <div class="input-wrapper sr-element fade-up w-50" data-delay="230">
                            <input type="text" name="project_name" value="" placeholder="Project name *" required>
                        </div>

                        <div class="input-wrapper sr-element fade-up w-50" data-delay="260">
                            <input type="text" name="order_date" value="" placeholder="Order date *" required class="datepicker">
                        </div>

                        <div class="input-wrapper sr-element fade-up w-50" data-delay="290">
                            <input type="text" name="ship_date" value="" placeholder="Ship date" required class="datepicker">
                        </div>

                        <div class="input-wrapper sr-element fade-up" data-delay="320">
                            <input type="text" name="delivery_address" value="" placeholder="Delivery address *" required>
                        </div>

                        <div class="input-wrapper sr-element fade-up" data-delay="350">
                            <input type="text" name="dealer" value="" placeholder="Dealer">
                        </div>

                        <div class="input-wrapper sr-element fade-up w-50" data-delay="380">
                            <input type="text" name="contact_person" value="" placeholder="Contact person *" required>
                        </div>

                        <div class="input-wrapper sr-element fade-up w-50" data-delay="410">
                            <input type="text" name="sales_person" value="" placeholder="Sales person *" required>
                        </div>

                        <div class="input-wrapper sr-element fade-up w-50" data-delay="440">
                            <input type="tel" name="phone_number" value="" placeholder="Phone number *" required>
                        </div>

                        <div class="input-wrapper sr-element fade-up w-50" data-delay="470">
                            <input type="email" name="email" value="" placeholder="Email *" required>
                        </div>
                    </div>
                </div>

                <div class="col-right">
                    <h3 class="sr-element fade-up" data-delay="400">Instructions</h3>

                    <p class="sr-element fade-up" data-delay="450">Please complete one form for <span class="text-orange">each</span> Island Booth ordered:</p>

                    <ul>
                        <li class="sr-element fade-up" data-delay="500">Himark Innovative Products will acknowledge
                            <span>pricing and delivery</span> within 24-48 hours.</li>
                        <li class="sr-element fade-up" data-delay="550"><span>Standard lead time F.O.B.</span> is 3/4 weeks after receipt of deposit by Himark Innovative Products.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Separator -->
        <div class="separator m-0">
            <div class="icon">
                <svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                        d="M25.6954 0.251056L30.6702 3.08073C31.1611 3.3612 31.4419 3.82684 31.4419 4.31841V24.683C31.4419 25.1734 31.1607 25.6382 30.6692 25.9188L25.6837 28.7572C25.4074 28.9154 25.0842 29 24.7488 29H7.13548C6.80165 29 6.47757 28.9158 6.19989 28.7591L1.21156 25.917C0.72211 25.6369 0.441895 25.1731 0.441895 24.683V4.31841C0.441895 3.82713 0.721968 3.36239 1.20905 3.08294L6.19866 0.244122C6.47543 0.085023 6.79915 0 7.13548 0H24.7488C25.0885 0 25.4135 0.0862396 25.6954 0.251056ZM1.91408 24.8133L6.11131 27.2045V1.7969L1.91408 4.18711V24.8133ZM7.58296 27.75H24.2992V1.24957H7.58296V27.75ZM25.7709 27.2045L29.9702 24.8134V4.18661L25.7709 1.79698V27.2045Z"
                        fill="#5F5F5F"></path>
                </svg>
            </div>
        </div>

        <!-- Product Characteristics -->
        <div class="characteristics">
            <div class="container">
                <h3 class="title-heading sr-element fade-up" data-delay="150">Select Characteristics:</h3>
                <div class="accordion-wrapper">
                    <div class="accordion custom-order__accordions">
                        <div class="col-50 accordions-mob-wrapper sr-element fade-up" data-delay="250">
                            <div class="accordion-item" data-stack="1">
                                <div class="accordion-title">
                                    <h3>Product Code</h3>
                                </div>
                                <div class="accordion-content">
                                    <ul class="list-of-2">
                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_code" value="Private Island" id="product_code-1" checked>
                                            <label for="product_code-1">Private Island</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_code" value="Island 10" id="product_code-2">
                                            <label for="product_code-2">Island 10</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_code" value="Island 4" id="product_code-3">
                                            <label for="product_code-3">Island 4</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_code" value="Island 12" id="product_code-4">
                                            <label for="product_code-4">Island 12</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_code" value="Island 4B" id="product_code-5">
                                            <label for="product_code-5">Island 4B</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_code" value="Island 12B" id="product_code-6">
                                            <label for="product_code-6">Island 12B</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_code" value="Island 6" id="product_code-7">
                                            <label for="product_code-7">Island 6</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_code" value="Island 16" id="product_code-8">
                                            <label for="product_code-8">Island 16</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_code" value="Island 8" id="product_code-9">
                                            <label for="product_code-9">Island 8</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_code" value="Island 16B" id="product_code-10">
                                            <label for="product_code-10">Island 16B</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_code" value="Island 8B" id="product_code-11">
                                            <label for="product_code-11">Island 8B</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_code" value="other" id="product_code-12">
                                            <input type="text" name="product_code_other" value="" placeholder="Other">
                                            <label for="product_code-12"></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="accordion-item input-group-table-height" data-stack="3">
                                <div class="accordion-title">
                                    <h3>Private Island Table Height</h3>
                                </div>
                                <div class="accordion-content">
                                    <ul>
                                    <li class="custom-control custom-radio">
                                            <input type="radio" name="product_table_height" value="standard 40 top of table" id="product_table_height-1" checked>
                                            <label for="product_table_height-1">Standard - 40" to top of table</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_table_height" value="36 top of table" id="product_table_height-2">
                                            <label for="product_table_height-2">36" to top of table </label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_table_height" value="42 top of table" id="product_table_height-3">
                                            <label for="product_table_height-3">42" to top of table</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_table_height" value="44 top of table" id="product_table_height-4">
                                            <label for="product_table_height-4">44" to top of table</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_table_height" value="other" id="product_table_height-5">
                                            <input type="text" name="product_table_height_other" value="" placeholder="Other (minimum 27O&#34; / maximum 47O&#34;)">
                                            <label for="product_table_height-5"></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-50 sr-element fade-up" data-delay="350">
                            <div class="accordion-item" data-stack="2">
                                <div class="accordion-title">
                                    <h3>Paint</h3>
                                </div>
                                <div class="accordion-content">
                                    <ul>
                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_paint" value="Black Onyx" id="product_paint-1" checked>
                                            <label for="product_paint-1">Black Onyx</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_paint" value="Slate Grey" id="product_paint-2">
                                            <label for="product_paint-2">Slate Grey</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_paint" value="Arctic White" id="product_paint-3">
                                            <label for="product_paint-3">Arctic White</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="accordion-item" data-stack="4">
                                <div class="accordion-title">
                                    <h3>Door (Handle Side)</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="door-sides-wrapper">
                                        <div class="block">
                                            <div class="block-title">left hand door</div>

                                            <div class="thumbnail">
                                                <svg width="78" height="113" viewBox="0 0 78 113" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M30.9208 84.8443L4.78363 71.1714M30.9208 59.3392L4.78363 45.6662M30.9859 33.705V109.949M4.85598 19.8826V96.1942M38.1123 109.82L76.6394 106.138V29.3647L38.069 33.7457L38.1123 109.82ZM38.1123 109.82L34.7621 111.66V35.4098L68.0184 18.0555V30.2816M40.6754 109.555V36.1095L74.0255 32.8695L74.2133 106.227M40.6754 107.279L74.2133 103.863M1.37576 18.0555L34.6754 1.3396L67.975 17.9672M7.71519 18.4019L14.8632 22.2395M16.6248 23.1361L23.7729 26.967M25.679 27.9451L32.827 31.776M34.9498 4.49806L41.5635 7.75837M43.188 8.6006L50.4515 12.2345M52.5527 13.165L59.8162 16.7989M16.1339 13.1311L28.7115 6.86858M15.8668 13.362L17.7729 14.4284C18.5094 14.8359 19.4192 14.8563 20.1701 14.4827L31.1737 8.83828C31.5491 8.6481 31.5852 8.15905 31.2459 7.92132L28.7982 6.50173M65.2241 19.6381V30.4786M34.6176 35.4098V111.66L1.36133 94.306V18.0555L34.6176 35.4098Z"
                                                        stroke="black" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <div class="block-title text-right">Right hand door</div>

                                            <div class="thumbnail">
                                                <svg width="78" height="113" viewBox="0 0 78 113" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M47.0792 84.8443L73.2164 71.1714M47.0792 59.3392L73.2164 45.6662M47.0141 33.705V109.949M73.144 19.8826V96.1942M39.8877 109.82L1.36061 106.138V29.3647L39.931 33.7457L39.8877 109.82ZM39.8877 109.82L43.2379 111.66V35.4098L9.98155 18.0555V30.2816M37.3246 109.555V36.1095L3.97446 32.8695L3.78674 106.227M37.3246 107.279L3.78674 103.863M76.6242 18.0555L43.3246 1.3396L10.025 17.9672M70.2848 18.4019L63.1368 22.2395M61.3752 23.1361L54.2271 26.967M52.321 27.9451L45.173 31.776M43.0502 4.49806L36.4365 7.75837M34.812 8.6006L27.5485 12.2345M25.4473 13.165L18.1838 16.7989M61.8661 13.1311L49.2885 6.86858M62.1332 13.362L60.2271 14.4284C59.4906 14.8359 58.5808 14.8563 57.8299 14.4827L46.8263 8.83828C46.4509 8.6481 46.4148 8.15905 46.7541 7.92132L49.2018 6.50173M12.7759 19.6381V30.4786M43.3824 35.4098V111.66L76.6387 94.306V18.0555L43.3824 35.4098Z"
                                                        stroke="black" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_side" id="product_side-1" value="L1" checked>
                                            <label for="product_side-1">1 door; left handed <span class="ml-auto">L1</span></label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_side" id="product_side-2" value="L2">
                                            <label for="product_side-2">2 doors; left handed <span>*</span><span class="ml-auto">L2</span></label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_side" id="product_side-3" value="R1">
                                            <label for="product_side-3">1 door; right handed <span>*</span><span class="ml-auto">R1</span></label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_side" id="product_side-4" value="R2">
                                            <label for="product_side-4">2 door; right handed <span>*</span><span class="ml-auto">R2</span></label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="product_side" id="product_side-5" value="LR">
                                            <label for="product_side-5">2 door; 1 left + 1 right handed <span>*</span><span class="ml-auto">LR</span></label>
                                        </li>
                                    </ul>

                                    <div class="note"><span>*</span> only available on capacity of 6 or more</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-100 sr-element fade-up" data-delay="450">
                            <div class="accordion-item" data-stack="5">
                                <div class="accordion-title">
                                    <h3>Side Panel Fabric</h3>
                                    <span>Note: Ceiling Standard is Maharam Grey</span>
                                </div>

                                <div class="accordion-content">
                                    <ol class="ordered-list has-3-columns">
                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1278 Whisper Amdiende" id="panel_fabric-1" checked>
                                            <label for="panel_fabric-1">W1278 Whisper Amdiende</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1292 Whisper Baffle" id="panel_fabric-2">
                                            <label for="panel_fabric-2">W1292 Whisper Baffle</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1295 Whisper Chant" id="panel_fabric-3">
                                            <label for="panel_fabric-3">W1295 Whisper Chant</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1288 Whisper Cloud" id="panel_fabric-4">
                                            <label for="panel_fabric-4">W1288 Whisper Cloud</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1276 Whisper Dim" id="panel_fabric-5">
                                            <label for="panel_fabric-5">W1276 Whisper Dim</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1281 Whisper Hush" id="panel_fabric-6">
                                            <label for="panel_fabric-6">W1281 Whisper Hush</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W11289 Whisper Lull" id="panel_fabric-7">
                                            <label for="panel_fabric-7">W11289 Whisper Lull</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1293 Whisper Mellow" id="panel_fabric-8">
                                            <label for="panel_fabric-8">W1293 Whisper Mellow</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1287 Whisper Muffle" id="panel_fabric-9">
                                            <label for="panel_fabric-9">W1287 Whisper Muffle</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1297 Whisper Mum" id="panel_fabric-10">
                                            <label for="panel_fabric-10">W1297 Whisper Mum</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1299 Whisper Mystery" id="panel_fabric-11">
                                            <label for="panel_fabric-11">W1299 Whisper Mystery</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1291 Whisper Peep" id="panel_fabric-12">
                                            <label for="panel_fabric-12">W1291 Whisper Peep</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1294 Whisper Plaid" id="panel_fabric-13">
                                            <label for="panel_fabric-13">W1294 Whisper Plaid</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1286 Whisper Quiet" id="panel_fabric-14">
                                            <label for="panel_fabric-14">W1286 Whisper Quiet</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1290 Whisper Reserve" id="panel_fabric-15">
                                            <label for="panel_fabric-15">W1290 Whisper Reserve</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1296 Whisper Secret" id="panel_fabric-16">
                                            <label for="panel_fabric-16">W1296 Whisper Secret</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1285 Whisper Serenity" id="panel_fabric-17">
                                            <label for="panel_fabric-17">W1285 Whisper Serenity</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1279 Whisper Silence" id="panel_fabric-18">
                                            <label for="panel_fabric-18">W1279 Whisper Silence</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1300 Whisper Shadow" id="panel_fabric-19">
                                            <label for="panel_fabric-19">W1300 Whisper Shadow</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W8888 Whisper Spirit" id="panel_fabric-20">
                                            <label for="panel_fabric-20">W8888 Whisper Spirit</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1283 Whisper Stillness" id="panel_fabric-21">
                                            <label for="panel_fabric-21">W1283 Whisper Stillness</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1280 Whisper Tranquility" id="panel_fabric-22">
                                            <label for="panel_fabric-22">W1280 Whisper Tranquility</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="W1282 Whisper Zen" id="panel_fabric-23">
                                            <label for="panel_fabric-23">W1282 Whisper Zen</label>
                                        </li>

                                        <li class="custom-control custom-radio">
                                            <input type="radio" name="panel_fabric" value="other" id="panel_fabric-24">
                                            <input type="text" name="panel_fabric_other" value="" placeholder="XF Custom Fabric">
                                            <label for="panel_fabric-24"></label>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Separator -->
        <div class="separator m-0">
            <div class="icon">
                <svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                        d="M25.6954 0.251056L30.6702 3.08073C31.1611 3.3612 31.4419 3.82684 31.4419 4.31841V24.683C31.4419 25.1734 31.1607 25.6382 30.6692 25.9188L25.6837 28.7572C25.4074 28.9154 25.0842 29 24.7488 29H7.13548C6.80165 29 6.47757 28.9158 6.19989 28.7591L1.21156 25.917C0.72211 25.6369 0.441895 25.1731 0.441895 24.683V4.31841C0.441895 3.82713 0.721968 3.36239 1.20905 3.08294L6.19866 0.244122C6.47543 0.085023 6.79915 0 7.13548 0H24.7488C25.0885 0 25.4135 0.0862396 25.6954 0.251056ZM1.91408 24.8133L6.11131 27.2045V1.7969L1.91408 4.18711V24.8133ZM7.58296 27.75H24.2992V1.24957H7.58296V27.75ZM25.7709 27.2045L29.9702 24.8134V4.18661L25.7709 1.79698V27.2045Z"
                        fill="#5F5F5F"></path>
                </svg>
            </div>
        </div>

        <!-- Form Submit -->
        <div class="submit-wrap">
            <div class="container">
                <div class="fields-wrapper">
                    <div class="input-wrapper w-70 sr-element fade-up" data-delay="150">
                        <textarea name="comments" id="" placeholder="Comments" rows="1"></textarea>

                        <div class="custom-control custom-checkbox sr-element fade-up" data-delay="150">
                            <input type="checkbox" name="order_copy" id="order_copy">
                            <label for="order_copy">I want to receive a copy to my email</label>
                        </div>
                    </div>

                    <div class="input-wrapper w-30 sr-element fade-up" data-delay="300">
                        <input type="email" name="order_copy_email" placeholder="Email" value="">
                        <button type="submit" class="btn submit-btn" data-label-normal="Send" data-label-processing="Sending...">Send</button>
                    </div>
                </div>

                <div id="response-messages" class="message"></div>
            </div>
        </div>
    </form>
</section>

<div id="submission-received" class="alert-popup mfp-with-anim mfp-hide">
    <div class="popup-inner text-center">
        <div class="icon-wrap text-center">
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.39281 11.4604L1.65826 6.9908L0.0800781 8.48065L6.39281 14.4401L19.9201 1.6699L18.3419 0.180054L6.39281 11.4604Z"
                    fill="#FF8D6B" />
            </svg>
        </div>

        <h3 class="popup-title">Thank You</h3>

        <p>Your submission has been received. <br>We’ll be in touch and contact you soon!</p>

        <div class="btn-wrap">
            <a href="./custom-order.php" class="btn">Back to Site</a>
        </div>
    </div>
</div>

<?php /* ?>
<div id="receive-copy" class="alert-popup mfp-with-anim mfp-hide">
    <div class="popup-inner text-center">
        <div class="icon-wrap text-center">
            <svg width="27" height="19" viewBox="0 0 27 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M24.97 0.9H2.02998C1.40074 0.9 0.9 1.43758 0.9 2.08887V16.9111C0.9 17.5624 1.40074 18.1 2.02998 18.1H24.97C25.5993 18.1 26.1 17.5624 26.1 16.9111V2.08887C26.1 1.43758 25.5993 0.9 24.97 0.9ZM1.95176 1.98785C1.97372 1.96691 2.00186 1.95534 2.03028 1.95513H24.9697C24.9981 1.95534 25.0263 1.96691 25.0482 1.98785L13.5 9.6139L1.95176 1.98785ZM1.90889 15.3742V3.18116L10.0435 8.55181L1.90889 15.3742ZM25.0911 16.9054C25.0911 16.9846 25.0317 17.0392 24.97 17.0392H2.02998C1.9683 17.0392 1.90889 16.9846 1.90889 16.9054V16.7242L10.9455 9.17411L13.2288 10.6835C13.2289 10.6835 13.2289 10.6835 13.2289 10.6835C13.3943 10.7937 13.6058 10.7937 13.7711 10.6835C13.7711 10.6835 13.7712 10.6835 13.7712 10.6835L16.0545 9.17411L25.0911 16.7242V16.9054ZM25.0911 3.23168V15.3749L16.9356 8.57472L25.0911 3.23168Z"
                    fill="#FF8D6B" stroke="#FF8D6B" stroke-width="0.2" />
            </svg>
        </div>

        <h3 class="popup-title">Receive a copy</h3>
        <p>You can get a copy of <br> the completed form <br>to your email</p>

        <form action="">
            <div class="fields-wrapper">
                <div class="input-wrapper">
                    <input type="email" placeholder="email address">
                </div>
                <div class="input-wrapper">
                    <input type="submit" class="btn" value="receive a copy">
                </div>
            </div>
        </form>
    </div>
</div>
<?php */ ?>

<!-- Footer -->
<?php include 'partials/footer.php'; ?>