<?php
        //v5

        session_start();
        $_SESSION["pixel"] = $_GET['pixel'] ?? '';
        $_SESSION["utm_source"] = $_GET['utm_source'] ?? '';
        $_SESSION["aff_click_id"] = $_GET['aff_click_id'] ?? '';
        $_SESSION["sub1"] = $_GET['sub1'] ?? '';
        $_SESSION["custom1"] = $_GET['custom1'] ?? '';
        $_SESSION["sub_id2"] = $_GET['sub_id2'] ?? '';
        $_SESSION["sub_id3"] = $_GET['sub_id3'] ?? '';
        $_SESSION["sub_id4"] = $_GET['sub_id4'] ?? '';
        $_SESSION["sub_id5"] = $_GET['sub_id5'] ?? '';
        $_SESSION["aff_param1"] = $_GET['aff_param1'] ?? '';
        $_SESSION["aff_param2"] = $_GET['aff_param2'] ?? '';
        $_SESSION["aff_param3"] = $_GET['aff_param3'] ?? '';
        $_SESSION["aff_param4"] = $_GET['aff_param4'] ?? '';
        $_SESSION["aff_param5"] = $_GET['aff_param5'] ?? '';

        ?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8" />
        <title>HYPERCARE</title>
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Expires" content="-1" />
        <meta name="keywords" content />
        <meta name="description" content="HYPERCARE" />
        <link rel="shortcut icon" href="images/hypercare-vn-box-01-20230417072136-ijbwe.webp" />
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>

        <svg xmlns="http://www.w3.org/2000/svg" style="width: 0px; height: 0px; position: absolute; overflow: hidden; display: none;">
            <symbol id="shape_ZDqCeVNEln">
                <path
                    d="M1664 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5T1321 1619q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5T301 1569q0-6 2-20l86-500L25 695Q0 668 0 647q0-37 56-46l502-73L783 73q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                />
            </symbol>
            <symbol id="shape_WulQJpiHPc"><path d="M66.09,0a66,66,0,0,1,57.69,33.85h0c15.35,24.59,34.24,33.54,54.9,9.1h0a37.63,37.63,0,1,1,0,46.31h0c-20.66-24.44-39.55-15.5-54.9,9.09h0A66.09,66.09,0,1,1,66.09,0Z" /></symbol>
            <symbol id="shape_KyeCCndxhC"><path d="M0,0V198.14L171.59,99.07ZM26.63,46.13l91.7,52.94L26.63,152Z" /></symbol>
            <symbol id="shape_MWOhfqnLZC"><path d="M16.13,32.25A16.13,16.13,0,1,1,32.25,16.13,16.14,16.14,0,0,1,16.13,32.25Zm0-29.77A13.65,13.65,0,1,0,29.77,16.13,13.66,13.66,0,0,0,16.13,2.48Z" /></symbol>
            <symbol id="shape_NUfGtMANFy">
                <path
                    d="M1408 930v318q0 119-84.5 203.5T1120 1536H288q-119 0-203.5-84.5T0 1248V416q0-119 84.5-203.5T288 128h832q63 0 117 25 15 7 18 23 3 17-9 29l-49 49q-10 10-23 10-3 0-9-2-23-6-45-6H288q-66 0-113 47t-47 113v832q0 66 47 113t113 47h832q66 0 113-47t47-113V994q0-13 9-22l64-64q10-10 23-10 6 0 12 3 20 8 20 29zm231-489l-814 814q-24 24-57 24t-57-24L281 825q-24-24-24-57t24-57l110-110q24-24 57-24t57 24l263 263 647-647q24-24 57-24t57 24l110 110q24 24 24 57t-24 57z"
                />
            </symbol>
        </svg>
        <div class="ladi-wraper">
            <div id="SECTION1" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="IMAGE54" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="IMAGE304" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="LINE4" class="ladi-element">
                        <div class="ladi-line"><div class="ladi-line-container"></div></div>
                    </div>
                    <div id="GROUP24" class="ladi-element">
                        <div class="ladi-group">
                            <div id="GROUP25" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX26" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="BOX27" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="FORM28" data-config-id="639ff785f8e8230012acf2c8" class="ladi-element">
                                        <form action="send.php" method="post" class="ladi-form">
                                            <div id="FORM_ITEM31" class="ladi-element">
                                                <div class="ladi-form-item-container">
                                                    <div class="ladi-form-item-background"></div>
                                                    <div class="ladi-form-item"><input name="name" required class="ladi-form-control" type="text" placeholder="Họ và tên" value /></div>
                                                </div>
                                            </div>
                                            <div id="FORM_ITEM32" class="ladi-element">
                                                <div class="ladi-form-item-container">
                                                    <div class="ladi-form-item-background"></div>
                                                    <div class="ladi-form-item"><input name="phone" required class="ladi-form-control" type="tel" placeholder="Số điện thoại" value /></div>
                                                </div>
                                            </div>
                                            <div id="BUTTON29" class="ladi-element">
                                                <button type="submit" class="ladi-button ladi-transition">
                                                    <div class="ladi-button-background"></div>
                                                    <div id="BUTTON_TEXT29" class="ladi-element ladi-button-headline"><p class="ladi-headline ladi-transition">Đặt hàng ngay</p></div>
                                                </button>
                                            </div>
                                            <input type="hidden" name="aff_click_id" value="<?php echo $_SESSION["aff_click_id"]; ?>"/>
                                            <input type="hidden" name="sub1" value="<?php echo $_SESSION["sub1"]; ?>">
                                            <input type="hidden" name="pixel" value="<?php echo $_SESSION["pixel"]; ?>">
                                            <input type="hidden" name="custom1" value="<?php echo $_SESSION["custom1"]; ?>">
                                            <input type="hidden" name="sub_id2" value="<?php echo $_SESSION["sub_id2"]; ?>">
                                            <input type="hidden" name="sub_id3" value="<?php echo $_SESSION["sub_id3"]; ?>">
                                            <input type="hidden" name="sub_id4" value="<?php echo $_SESSION["sub_id4"]; ?>">
                                            <input type="hidden" name="sub_id5" value="<?php echo $_SESSION["sub_id5"]; ?>">
                                            <input type="hidden" name="aff_param1" value="<?php echo $_SESSION["aff_param1"]; ?>">
                                            <input type="hidden" name="aff_param2" value="<?php echo $_SESSION["aff_param2"]; ?>">
                                            <input type="hidden" name="aff_param3" value="<?php echo $_SESSION["aff_param3"]; ?>">
                                            <input type="hidden" name="aff_param4" value="<?php echo $_SESSION["aff_param4"]; ?>">
                                            <input type="hidden" name="aff_param5" value="<?php echo $_SESSION["aff_param5"]; ?>">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP34" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="PARAGRAPH35" class="ladi-element">
                                        <div class="ladi-paragraph ladi-transition">Giờ<br /></div>
                                    </div>
                                    <div id="PARAGRAPH36" class="ladi-element">
                                        <div class="ladi-paragraph ladi-transition">Phút<br /></div>
                                    </div>
                                    <div id="PARAGRAPH37" class="ladi-element"><div class="ladi-paragraph ladi-transition">Giây</div></div>
                                    <div id="COUNTDOWN38" class="ladi-element">
                                        <div class="ladi-countdown" id="countdown2">
                                            <div id="COUNTDOWN_ITEM39" class="ladi-element">
                                                <div class="ladi-countdown-background"></div>
                                                <div class="ladi-countdown-text"><span>00</span></div>
                                            </div>
                                            <div id="COUNTDOWN_ITEM40" class="ladi-element">
                                                <div class="ladi-countdown-background"></div>
                                                <div class="ladi-countdown-text"><span class="hours">00</span></div>
                                            </div>
                                            <div id="COUNTDOWN_ITEM41" class="ladi-element">
                                                <div class="ladi-countdown-background"></div>
                                                <div class="ladi-countdown-text"><span class="minutes">00</span></div>
                                            </div>
                                            <div id="COUNTDOWN_ITEM42" class="ladi-element">
                                                <div class="ladi-countdown-background"></div>
                                                <div class="ladi-countdown-text"><span class="seconds">00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="HEADLINE43" class="ladi-element">
                                <h3 class="ladi-headline ladi-transition">+ Đơn hàng sẽ được ship đến TẬN NHÀ theo đúng yêu cầu của bạn<br /></h3>
                            </div>
                            <div id="BOX45" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                            <div id="HEADLINE33" class="ladi-element"><h3 class="ladi-headline ladi-transition">Chương trình khuyến mại 50% kết thúc trong</h3></div>
                        </div>
                    </div>
                    <div id="GROUP308" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH7" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition"><span style="font-weight: 700;">CHỨNG CAO HUYẾT ÁP</span></div>
                            </div>
                            <div id="PARAGRAPH6" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition"><span style="font-weight: 700;">TRỊ TẬN GỐC</span></div>
                            </div>
                            <div id="PARAGRAPH2" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">Sản phẩm được làm từ&nbsp;100% thiên nhiên<br /></div>
                            </div>
                            <div id="IMAGE305" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP307" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH10" class="ladi-element"><div class="ladi-paragraph ladi-transition">Giúp phục hồi sức mạnh tự nhiên của cơ thể</div></div>
                            <div id="SHAPE306" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 246 132.18" class="" fill="rgba(232, 59, 48, 1)"><use xlink:href="#shape_WulQJpiHPc" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP309" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH310" class="ladi-element"><div class="ladi-paragraph ladi-transition">Tuyệt đối an toàn. Không có tác dụng phụ</div></div>
                            <div id="SHAPE311" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 246 132.18" class="" fill="rgba(232, 59, 48, 1)"><use xlink:href="#shape_WulQJpiHPc" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP312" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH313" class="ladi-element"><div class="ladi-paragraph ladi-transition">Thúc đẩy quá trình làm sạch các mạch máu</div></div>
                            <div id="SHAPE314" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 246 132.18" class="" fill="rgba(232, 59, 48, 1)"><use xlink:href="#shape_WulQJpiHPc" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP315" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH316" class="ladi-element"><div class="ladi-paragraph ladi-transition">Giúp thoát khỏi nguy cơ đau tim và đột quỵ</div></div>
                            <div id="SHAPE317" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 246 132.18" class="" fill="rgba(232, 59, 48, 1)"><use xlink:href="#shape_WulQJpiHPc" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP325" class="ladi-element">
                        <div class="ladi-group">
                            <div id="SHAPE326" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 311.78 187.07" fill='url("#SHAPE326_desktop_gradient")'>
                                        <defs id="SHAPE326_defs">
                                            <lineargradient id="SHAPE326_desktop_gradient" gradientTransform="rotate(0)">
                                                <stop offset="0%" stop-color="rgba(216, 29, 16, 1.0)" />
                                                <stop offset="100%" stop-color="rgba(99, 6, 1, 1.0)" />
                                            </lineargradient>
                                        </defs>
                                        <path d="M13,14.49.06,170a15.8,15.8,0,0,0,17.51,17l280.19-31.73A15.8,15.8,0,0,0,311.57,137L292.68,22a15.79,15.79,0,0,0-15-13.23L29.29,0A15.79,15.79,0,0,0,13,14.49Z" />
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH327" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    <span class="ladipage-animated-headline rotate-3"><span class="ladipage-animated-words-wrapper" data-word='["590.000đ/hộp"]'>&nbsp;590.000đ/hộp</span></span>
                                </div>
                            </div>
                            <div id="PARAGRAPH328" class="ladi-element"><div class="ladi-paragraph ladi-transition">&nbsp;1.180.000đ/hộp</div></div>
                            <div id="LINE329" class="ladi-element">
                                <div class="ladi-line"><div class="ladi-line-container"></div></div>
                            </div>
                            <div id="SHAPE330" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 171.59 198.14" fill="rgba(216, 30, 16, 1.0)"><use xlink:href="#shape_KyeCCndxhC" /></svg>
                                </div>
                            </div>
                            <div id="SHAPE331" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 32.25 32.25" fill="rgba(145, 23, 16, 1.0)"><use xlink:href="#shape_MWOhfqnLZC" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="IMAGE631" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="GROUP672" class="ladi-element">
                        <div class="ladi-group">
                            <div id="GROUP673" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX674" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="BOX675" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="BOX676" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="LINE677" class="ladi-element">
                                        <div class="ladi-line"><div class="ladi-line-container"></div></div>
                                    </div>
                                    <div id="LINE678" class="ladi-element">
                                        <div class="ladi-line"><div class="ladi-line-container"></div></div>
                                    </div>
                                    <div id="HEADLINE679" class="ladi-element">
                                        <h3 class="ladi-headline ladi-transition">Mua 5 hộp<br /></h3>
                                    </div>
                                    <div id="HEADLINE680" class="ladi-element"><h3 class="ladi-headline ladi-transition">2,950,000</h3></div>
                                    <div id="HEADLINE681" class="ladi-element"><h3 class="ladi-headline ladi-transition">2,094,500</h3></div>
                                    <div id="HEADLINE685" class="ladi-element">
                                        <h3 class="ladi-headline ladi-transition">Mua 3 hộp<br /></h3>
                                    </div>
                                    <div id="HEADLINE686" class="ladi-element"><h3 class="ladi-headline ladi-transition">1,770,000&nbsp;</h3></div>
                                    <div id="HEADLINE687" class="ladi-element"><h3 class="ladi-headline ladi-transition">1,699,200</h3></div>
                                </div>
                            </div>
                            <div id="HEADLINE688" class="ladi-element"><h3 class="ladi-headline ladi-transition">COMBO KHUYẾN MẠI</h3></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="SECTION56" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="IMAGE560" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="PARAGRAPH58" class="ladi-element">
                        <div class="ladi-paragraph ladi-transition"><span style="font-weight: bold;">TƯ VẤN MIỄN PHÍ</span></div>
                    </div>
                    <div id="PARAGRAPH59" class="ladi-element">
                        <div class="ladi-paragraph ladi-transition"><span style="font-weight: bold;">TRƯỚC KHI MUA VÀ TRONG QUÁ TRÌNH SỬ DỤNG&nbsp;</span></div>
                    </div>
                    <div id="LINE333" class="ladi-element">
                        <div class="ladi-line"><div class="ladi-line-container"></div></div>
                    </div>
                    <div id="IMAGE632" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="PARAGRAPH60" class="ladi-element">
                        <div class="ladi-paragraph ladi-transition">
                            Mỗi khách hàng sẽ đều được chuyên viên tư vấn kĩ lưỡng về lộ trình sử dụng tùy thuộc vào tình trạng bệnh mỗi người. Và để khách hàng không phải chờ đợi lâu, chúng tôi đã tăng cường số lượng chuyên viên để tư vấn
                            cho khách hàng trước khi mua hàng và trong quá trình sử dụng.
                        </div>
                    </div>
                </div>
            </div>
            <div id="SECTION62" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="GROUP335" class="ladi-element">
                        <div class="ladi-group">
                            <div id="IMAGE336" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="GROUP337" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX338" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="HEADLINE339" class="ladi-element"><h3 class="ladi-headline ladi-transition">Thường xuyên mệt mỏi</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP355" class="ladi-element">
                        <div class="ladi-group">
                            <div id="IMAGE356" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="GROUP357" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX358" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="HEADLINE359" class="ladi-element"><h3 class="ladi-headline ladi-transition">Giảm thị lực</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP360" class="ladi-element">
                        <div class="ladi-group">
                            <div id="IMAGE361" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="GROUP362" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX363" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="HEADLINE364" class="ladi-element"><h3 class="ladi-headline ladi-transition">Tăng cân không kiểm soát</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP365" class="ladi-element">
                        <div class="ladi-group">
                            <div id="IMAGE366" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="GROUP367" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX368" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="HEADLINE369" class="ladi-element">
                                        <h3 class="ladi-headline ladi-transition">
                                            Vết thương <br />
                                            lâu lành<br />
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP370" class="ladi-element">
                        <div class="ladi-group">
                            <div id="IMAGE371" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="GROUP372" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX373" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="HEADLINE374" class="ladi-element">
                                        <h3 class="ladi-headline ladi-transition">Giảm ham muốn tình dục<br /></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP375" class="ladi-element">
                        <div class="ladi-group">
                            <div id="IMAGE376" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="GROUP377" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX378" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="HEADLINE379" class="ladi-element">
                                        <h3 class="ladi-headline ladi-transition">Tê bì tay chân&nbsp;<br /></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP380" class="ladi-element">
                        <div class="ladi-group">
                            <div id="IMAGE381" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="GROUP382" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX383" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="HEADLINE384" class="ladi-element">
                                        <h3 class="ladi-headline ladi-transition">
                                            Căng thẳng <br />
                                            kéo dài<br />
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP385" class="ladi-element">
                        <div class="ladi-group">
                            <div id="IMAGE386" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="GROUP387" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX388" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="HEADLINE389" class="ladi-element">
                                        <h3 class="ladi-headline ladi-transition">
                                            Đi tiểu <br />
                                            nhiều lần<br />
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP390" class="ladi-element">
                        <div class="ladi-group">
                            <div id="IMAGE391" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="GROUP392" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX393" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="HEADLINE394" class="ladi-element">
                                        <h3 class="ladi-headline ladi-transition">Đói triền miên<br /></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP395" class="ladi-element">
                        <div class="ladi-group">
                            <div id="IMAGE396" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="GROUP397" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX398" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="HEADLINE399" class="ladi-element">
                                        <h3 class="ladi-headline ladi-transition">Thường xuyên đau đầu&nbsp;<br /></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP401" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH63" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    <span style="font-weight: bold;">CON NGƯỜI PHẢI ĐỐI MẶT VỚI NHỮNG VẤN ĐỀ GÌ<br /></span>
                                </div>
                            </div>
                            <div id="PARAGRAPH400" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    <span style="font-weight: bold;">SAU 40 TUỔI?<br /></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="SECTION97" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="IMAGE98" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="PARAGRAPH104" class="ladi-element">
                        <div class="ladi-paragraph ladi-transition"><span style="font-weight: bold;">HYPERCARE</span></div>
                    </div>
                    <div id="PARAGRAPH105" class="ladi-element">
                        <div class="ladi-paragraph ladi-transition"><span style="font-weight: bold;">HỖ TRỢ LOẠI BỎ TRIỆU CHỨNG TĂNG HUYẾT ÁP&nbsp;</span></div>
                    </div>
                    <div id="GROUP402" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH106" class="ladi-element"><div class="ladi-paragraph ladi-transition">Bình thường hóa sự trao đổi chất</div></div>
                            <div id="PARAGRAPH108" class="ladi-element"><div class="ladi-paragraph ladi-transition">Loại bỏ căng thẳng bên trong</div></div>
                            <div id="PARAGRAPH110" class="ladi-element"><div class="ladi-paragraph ladi-transition">Hỗ trợ điều hòa lượng đường trong máu</div></div>
                            <div id="PARAGRAPH112" class="ladi-element"><div class="ladi-paragraph ladi-transition">Ổn định huyết áp</div></div>
                        </div>
                    </div>
                    <div id="GROUP561" class="ladi-element">
                        <div class="ladi-group">
                            <div id="LINE103" class="ladi-element">
                                <div class="ladi-line"><div class="ladi-line-container"></div></div>
                            </div>
                            <div id="LINE107" class="ladi-element">
                                <div class="ladi-line"><div class="ladi-line-container"></div></div>
                            </div>
                            <div id="LINE109" class="ladi-element">
                                <div class="ladi-line"><div class="ladi-line-container"></div></div>
                            </div>
                            <div id="LINE111" class="ladi-element">
                                <div class="ladi-line"><div class="ladi-line-container"></div></div>
                            </div>
                            <div id="LINE403" class="ladi-element">
                                <div class="ladi-line"><div class="ladi-line-container"></div></div>
                            </div>
                            <div id="IMAGE100" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP563" class="ladi-element">
                        <div class="ladi-group">
                            <div id="BOX562" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                            <div id="PARAGRAPH404" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    <span style="font-weight: bold;">
                                        ĐỪNG TRÌ HOÃN - HÃY GIỮ GÌN SỨC KHỎE CỦA BẠN&nbsp;<br />
                                        NGAY TỪ HÔM NAY!!!&nbsp;
                                    </span>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="SHAPE564" class="ladi-element">
                        <div class="ladi-shape ladi-transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1152 1896.0833" class="" fill="rgba(246, 141, 133, 1.0)">
                                <path
                                    d="M1075 864q0 13-10 23l-466 466q-10 10-23 10t-23-10L87 887q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23zm0-384q0 13-10 23L599 969q-10 10-23 10t-23-10L87 503q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div id="SECTION115" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="PARAGRAPH116" class="ladi-element">
                        <div class="ladi-paragraph ladi-transition"><span style="font-weight: bold;">CHĂM SÓC SỨC KHỎE CÀNG SỚM</span></div>
                    </div>
                    <div id="BOX117" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                    <div id="GROUP263" class="ladi-element">
                        <div class="ladi-group">
                            <div id="HEADLINE127" class="ladi-element"><h3 class="ladi-headline ladi-transition">Chương trình khuyến mại 50% kết thúc trong</h3></div>
                            <div id="COUNTDOWN128" class="ladi-element">
                                <div class="ladi-countdown" id="countdown">
                                    <div id="COUNTDOWN_ITEM129" class="ladi-element">
                                        <div class="ladi-countdown-background"></div>
                                        <div class="ladi-countdown-text"><span>00</span></div>
                                    </div>
                                    <div id="COUNTDOWN_ITEM130" class="ladi-element">
                                        <div class="ladi-countdown-background"></div>
                                        <div class="ladi-countdown-text"><span class="hours">00</span></div>
                                    </div>
                                    <div id="COUNTDOWN_ITEM131" class="ladi-element">
                                        <div class="ladi-countdown-background"></div>
                                        <div class="ladi-countdown-text"><span class="minutes">00</span></div>
                                    </div>
                                    <div id="COUNTDOWN_ITEM132" class="ladi-element">
                                        <div class="ladi-countdown-background"></div>
                                        <div class="ladi-countdown-text"><span class="seconds">00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="IMAGE133" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="FORM134" data-config-id="639ff785f8e8230012acf2c8" class="ladi-element">
                        <form action="send.php" method="post" class="ladi-form">
                            <div id="FORM_ITEM137" class="ladi-element">
                                <div class="ladi-form-item-container">
                                    <div class="ladi-form-item-background"></div>
                                    <div class="ladi-form-item"><input name="name" required class="ladi-form-control" type="text" placeholder="Họ và tên" value /></div>
                                </div>
                            </div>
                            <div id="FORM_ITEM138" class="ladi-element">
                                <div class="ladi-form-item-container">
                                    <div class="ladi-form-item-background"></div>
                                    <div class="ladi-form-item"><input name="phone" required class="ladi-form-control" type="tel" placeholder="Số điện thoại" value /></div>
                                </div>
                            </div>
                            <div id="BUTTON135" class="ladi-element">
                                <button type="submit" class="ladi-button ladi-transition">
                                    <div class="ladi-button-background"></div>
                                    <div id="BUTTON_TEXT135" class="ladi-element ladi-button-headline"><p class="ladi-headline ladi-transition">Đặt hàng ngay</p></div>
                                </button>
                            </div>
                            <input type="hidden" name="aff_click_id" value="<?php echo $_SESSION["aff_click_id"]; ?>"/>
                            <input type="hidden" name="sub1" value="<?php echo $_SESSION["sub1"]; ?>">
                            <input type="hidden" name="pixel" value="<?php echo $_SESSION["pixel"]; ?>">
                            <input type="hidden" name="custom1" value="<?php echo $_SESSION["custom1"]; ?>">
                            <input type="hidden" name="sub_id2" value="<?php echo $_SESSION["sub_id2"]; ?>">
                            <input type="hidden" name="sub_id3" value="<?php echo $_SESSION["sub_id3"]; ?>">
                            <input type="hidden" name="sub_id4" value="<?php echo $_SESSION["sub_id4"]; ?>">
                            <input type="hidden" name="sub_id5" value="<?php echo $_SESSION["sub_id5"]; ?>">
                            <input type="hidden" name="aff_param1" value="<?php echo $_SESSION["aff_param1"]; ?>">
                            <input type="hidden" name="aff_param2" value="<?php echo $_SESSION["aff_param2"]; ?>">
                            <input type="hidden" name="aff_param3" value="<?php echo $_SESSION["aff_param3"]; ?>">
                            <input type="hidden" name="aff_param4" value="<?php echo $_SESSION["aff_param4"]; ?>">
                            <input type="hidden" name="aff_param5" value="<?php echo $_SESSION["aff_param5"]; ?>">
                        </form>
                    </div>
                    <div id="HEADLINE139" class="ladi-element">
                        <h3 class="ladi-headline ladi-transition">
                            Ship toàn quốc - Thành toán khi nhận hàng<br />
                            Giảm thêm 10% khi thanh toán bằng hình thức chuyển khoản<br />
                        </h3>
                    </div>
                    <div id="PARAGRAPH405" class="ladi-element">
                        <div class="ladi-paragraph ladi-transition"><span style="font-weight: 700;">NGUY CƠ BIẾN CHỨNG CÀNG ÍT! PHÒNG BỆNH HƠN CHỮA BỆNH!</span><br /></div>
                    </div>
                    <div id="IMAGE406" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                </div>
            </div>
            <div id="SECTION289" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="IMAGE290" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="IMAGE291" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="GROUP292" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH293" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    <span style="font-weight: bold;">Viên thuốc được <span style="color: rgb(125, 28, 69);">điều chế dạng sủi </span>giúp hấp thụ và giảm huyết áp nhanh hơn gấp 5 lần.&nbsp;</span><br />
                                </div>
                            </div>
                            <div id="SHAPE294" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1664 1896.0833" class="" fill="rgba(254, 77, 1, 1)"><use xlink:href="#shape_ZDqCeVNEln" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP295" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH296" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    <span style="font-weight: bold;">
                                        Sử dụng Hypercare theo đúng liệu trình, huyết áp của bạn không chỉ ổn định trong thời gian dài mà còn <span style="color: rgb(125, 28, 69);">loại bỏ được nguyên nhân gây bệnh</span>&nbsp;bằng cách đảo
                                        ngược quá trình tự miễn dịch. <span style="color: rgb(125, 28, 69);">Không một loại sản phẩm nào </span>trên thị trường có hiệu quả và cơ chế hoạt động độc đáo giống Hypercare
                                    </span>
                                    <br />
                                </div>
                            </div>
                            <div id="SHAPE297" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1664 1896.0833" class="" fill="rgba(254, 77, 1, 1.0)">
                                        <use xlink:href="#shape_ZDqCeVNEln" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE298" class="ladi-element">
                        <h3 class="ladi-headline ladi-transition"><span style="font-weight: 700;">HIỆU QUẢ CỦA VIÊN SỦI GIẢM HUYẾT ÁP HYPERCARE</span></h3>
                    </div>
                    <div id="LINE299" class="ladi-element">
                        <div class="ladi-line"><div class="ladi-line-container"></div></div>
                    </div>
                    <div id="LINE300" class="ladi-element">
                        <div class="ladi-line"><div class="ladi-line-container"></div></div>
                    </div>
                    <div id="GROUP301" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH302" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    <span style="font-weight: bold;">
                                        Sự khác biệt cơ bản giữa viên sủi Hypercare và các sản phẩm khác là thành phần cấu thành nên sản phẩm<span style="color: rgb(125, 28, 69);"> hoàn toàn tự nhiên và không gây tác dụng phụ.</span>
                                    </span>
                                    <br />
                                </div>
                            </div>
                            <div id="SHAPE303" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1664 1896.0833" class="" fill="rgba(254, 77, 1, 1.0)">
                                        <use xlink:href="#shape_ZDqCeVNEln" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="SECTION140" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="PARAGRAPH141" class="ladi-element">
                        <div class="ladi-paragraph ladi-transition"><span style="font-weight: bold;">HƯỚNG DẪN ĐẶT HÀNG HYPERCARE</span></div>
                    </div>
                    <div id="GROUP467" class="ladi-element">
                        <div class="ladi-group">
                            <div id="GROUP445" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="GROUP444" class="ladi-element">
                                        <div class="ladi-group">
                                            <div id="GROUP412" class="ladi-element">
                                                <div class="ladi-group">
                                                    <div id="BOX413" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                                    <div id="SHAPE414" class="ladi-element">
                                                        <div class="ladi-shape ladi-transition">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1611.2499 1896.0833" class="" fill="rgba(255, 242, 243, 1.0)">
                                                                <path
                                                                    d="M1468 380q28 28 48 76t20 88v1152q0 40-28 68t-68 28H96q-40 0-68-28t-28-68V96q0-40 28-68T96 0h896q40 0 88 20t76 48zm-444-244v376h376q-10-29-22-41l-313-313q-12-12-41-22zm384 1528V640H992q-40 0-68-28t-28-68V128H128v1536h1280zM384 800q0-14 9-23t23-9h704q14 0 23 9t9 23v64q0 14-9 23t-23 9H416q-14 0-23-9t-9-23v-64zm736 224q14 0 23 9t9 23v64q0 14-9 23t-23 9H416q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h704zm0 256q14 0 23 9t9 23v64q0 14-9 23t-23 9H416q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h704z"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="SHAPE143" class="ladi-element">
                                                <div class="ladi-shape ladi-transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgba(6, 65, 65, 1.0)">
                                                        <path d="M14,17H12V9H10V7H14M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="PARAGRAPH144" class="ladi-element"><div class="ladi-paragraph ladi-transition">Điền thông tin liên hệ tại form&nbsp;</div></div>
                                </div>
                            </div>
                            <div id="GROUP446" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="GROUP447" class="ladi-element">
                                        <div class="ladi-group">
                                            <div id="GROUP448" class="ladi-element">
                                                <div class="ladi-group">
                                                    <div id="BOX449" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                                    <div id="SHAPE450" class="ladi-element">
                                                        <div class="ladi-shape ladi-transition">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgba(255, 242, 243, 1.0)">
                                                                <path
                                                                    d="M12,1A9,9 0 0,1 21,10V17A3,3 0 0,1 18,20H15V12H19V10A7,7 0 0,0 12,3A7,7 0 0,0 5,10V12H9V20H6A3,3 0 0,1 3,17V10A9,9 0 0,1 12,1M15,24V22H17V24H15M11,24V22H13V24H11M7,24V22H9V24H7Z"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="SHAPE451" class="ladi-element">
                                                <div class="ladi-shape ladi-transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgba(6, 65, 65, 1.0)">
                                                        <path d="M15,11C15,12.11 14.1,13 13,13H11V15H15V17H9V13C9,11.89 9.9,11 11,11H13V9H9V7H13A2,2 0 0,1 15,9M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="PARAGRAPH452" class="ladi-element"><div class="ladi-paragraph ladi-transition">Chuyên viên sẽ gọi lại để tư vấn cụ thể</div></div>
                                </div>
                            </div>
                            <div id="GROUP453" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="GROUP454" class="ladi-element">
                                        <div class="ladi-group">
                                            <div id="GROUP455" class="ladi-element">
                                                <div class="ladi-group">
                                                    <div id="BOX456" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                                    <div id="SHAPE457" class="ladi-element">
                                                        <div class="ladi-shape ladi-transition">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1536 1896.0833" class="" fill="rgba(255, 242, 243, 1.0)">
                                                                <path
                                                                    d="M352 1408v128H0v-128h352zm352-128q26 0 45 19t19 45v256q0 26-19 45t-45 19H448q-26 0-45-19t-19-45v-256q0-26 19-45t45-19h256zm160-384v128H0V896h864zM224 384v128H0V384h224zm1312 1024v128H800v-128h736zM576 256q26 0 45 19t19 45v256q0 26-19 45t-45 19H320q-26 0-45-19t-19-45V320q0-26 19-45t45-19h256zm640 512q26 0 45 19t19 45v256q0 26-19 45t-45 19H960q-26 0-45-19t-19-45V832q0-26 19-45t45-19h256zm320 128v128h-224V896h224zm0-512v128H672V384h864z"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="SHAPE458" class="ladi-element">
                                                <div class="ladi-shape ladi-transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgba(6, 65, 65, 1.0)">
                                                        <path
                                                            d="M15,10.5A1.5,1.5 0 0,1 13.5,12C14.34,12 15,12.67 15,13.5V15C15,16.11 14.11,17 13,17H9V15H13V13H11V11H13V9H9V7H13C14.11,7 15,7.89 15,9M19,3H5C3.91,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19C20.11,21 21,20.1 21,19V5A2,2 0 0,0 19,3Z"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="PARAGRAPH459" class="ladi-element"><div class="ladi-paragraph ladi-transition">Chuyên viên phân tích tình trạng sức khỏe của bạn</div></div>
                                </div>
                            </div>
                            <div id="GROUP460" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="GROUP461" class="ladi-element">
                                        <div class="ladi-group">
                                            <div id="GROUP462" class="ladi-element">
                                                <div class="ladi-group">
                                                    <div id="BOX463" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                                    <div id="SHAPE464" class="ladi-element">
                                                        <div class="ladi-shape ladi-transition">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1672.2646 1896.0833" class="" fill="rgba(255, 242, 243, 1.0)">
                                                                <path
                                                                    d="M128 1664h288v-288H128v288zm352 0h320v-288H480v288zm-352-352h288V992H128v320zm352 0h320V992H480v320zM128 928h288V640H128v288zm736 736h320v-288H864v288zM480 928h320V640H480v288zm768 736h288v-288h-288v288zm-384-352h320V992H864v320zM512 448V160q0-13-9.5-22.5T480 128h-64q-13 0-22.5 9.5T384 160v288q0 13 9.5 22.5T416 480h64q13 0 22.5-9.5T512 448zm736 864h288V992h-288v320zM864 928h320V640H864v288zm384 0h288V640h-288v288zm32-480V160q0-13-9.5-22.5T1248 128h-64q-13 0-22.5 9.5T1152 160v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38H128q-52 0-90-38t-38-90V384q0-52 38-90t90-38h128v-96q0-66 47-113T416 0h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="SHAPE465" class="ladi-element">
                                                <div class="ladi-shape ladi-transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgba(6, 65, 65, 1.0)">
                                                        <path d="M15,17H13V13H9V7H11V11H13V7H15M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="PARAGRAPH466" class="ladi-element">
                                        <div class="ladi-paragraph ladi-transition">
                                            Tư vấn lộ trình sử dụng <br />
                                            phù hợp<br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP497" class="ladi-element">
                        <div class="ladi-group">
                            <div id="GROUP498" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="GROUP499" class="ladi-element">
                                        <div class="ladi-group">
                                            <div id="GROUP500" class="ladi-element">
                                                <div class="ladi-group">
                                                    <div id="BOX501" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                                    <div id="SHAPE502" class="ladi-element">
                                                        <div class="ladi-shape ladi-transition">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgba(255, 242, 243, 1.0)">
                                                                <path
                                                                    d="M3,4A2,2 0 0,0 1,6V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8H17V4M10,6L14,10L10,14V11H4V9H10M17,9.5H19.5L21.47,12H17M6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5M18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5Z"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="SHAPE503" class="ladi-element">
                                                <div class="ladi-shape ladi-transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgba(6, 65, 65, 1.0)">
                                                        <path d="M15,9H11V11H13A2,2 0 0,1 15,13V15C15,16.11 14.1,17 13,17H9V15H13V13H9V7H15M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="PARAGRAPH504" class="ladi-element">
                                        <div class="ladi-paragraph ladi-transition">
                                            Giao hàng đến địa chỉ <br />
                                            của bạn<br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP505" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="GROUP506" class="ladi-element">
                                        <div class="ladi-group">
                                            <div id="GROUP507" class="ladi-element">
                                                <div class="ladi-group">
                                                    <div id="BOX508" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                                    <div id="SHAPE509" class="ladi-element">
                                                        <div class="ladi-shape ladi-transition">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                version="1.1"
                                                                x="0px"
                                                                y="0px"
                                                                viewBox="0 0 100 100"
                                                                enable-background="new 0 0 100 100"
                                                                xml:space="preserve"
                                                                preserveAspectRatio="none"
                                                                width="100%"
                                                                height="100%"
                                                                class=""
                                                                fill="rgba(255, 242, 243, 1.0)"
                                                            >
                                                                <path
                                                                    d="M50.292,35.773c0.697,0,1.255,0.25,1.668,0.75c0.416,0.498,0.623,1.25,0.623,2.269h3.642c0-1.646-0.418-2.979-1.262-3.998  c-0.839-1.028-2-1.646-3.484-1.857v-2.729h-2.016v2.688c-1.505,0.15-2.709,0.688-3.611,1.587c-0.906,0.906-1.361,2.068-1.361,3.486  c0,0.823,0.146,1.532,0.396,2.128c0.264,0.601,0.635,1.114,1.104,1.563c0.478,0.438,1.043,0.827,1.705,1.171  c0.664,0.341,1.453,0.683,2.367,1.021c0.916,0.354,1.563,0.729,1.942,1.126c0.384,0.408,0.563,0.956,0.563,1.646  c0,0.663-0.213,1.188-0.643,1.58c-0.435,0.39-1.017,0.585-1.75,0.585c-0.896,0-1.572-0.271-2.048-0.811  c-0.479-0.522-0.715-1.299-0.715-2.298h-3.643c0,1.729,0.475,3.104,1.416,4.146c0.943,1.036,2.275,1.646,4,1.833v2.486h2.004v-2.509  c1.564-0.152,2.783-0.685,3.676-1.563c0.896-0.896,1.334-2.057,1.334-3.479c0-0.763-0.112-1.433-0.354-2.008  c-0.23-0.575-0.568-1.086-1.018-1.536c-0.445-0.448-0.99-0.851-1.644-1.208c-0.645-0.354-1.471-0.733-2.475-1.139  s-1.689-0.798-2.064-1.188c-0.36-0.386-0.559-0.896-0.559-1.531c0-0.688,0.188-1.229,0.565-1.611  C49.071,35.97,49.602,35.773,50.292,35.773z M81.84,23.848H69.928V18.16c0-3.646-2.963-6.604-6.604-6.604  c-1.637,0-3.133,0.604-4.287,1.592C57.96,10.966,55.719,9.46,53.12,9.46c-2.594,0-4.836,1.508-5.912,3.688  c-1.151-0.979-2.647-1.59-4.284-1.59c-3.214,0-5.896,2.313-6.479,5.354c-1.063-0.729-2.344-1.154-3.723-1.154  c-3.646,0-6.605,2.961-6.605,6.6v1.5h-7.947c-0.825,0-1.5,0.676-1.5,1.5v34.063c0,0.826,0.675,1.5,1.5,1.5h6.101v3.172  c0,8.604,4.147,16.604,11.145,21.569v3.377c0,0.822,0.672,1.5,1.5,1.5c0.826,0,1.5-0.678,1.5-1.5v-4.166  c0-0.502-0.252-0.978-0.672-1.248c-6.563-4.362-10.479-11.676-10.479-19.532v-3.174h33.332v1.09  c-6.326,0.742-11.25,6.139-11.25,12.66c0,0.827,0.672,1.5,1.5,1.5s1.5-0.673,1.5-1.5c0-5.377,4.373-9.75,9.75-9.75  c0.828,0,1.5-0.673,1.5-1.5v-4c0-4.646,1.539-7.438,2.83-8.943c1.434-1.682,3.313-2.684,5.03-2.684c0.81,0,2.683,0.264,2.683,2.688  c0,3.354,0.021,13.607,0.021,13.607c0,7.856-3.918,15.17-10.479,19.534c-0.418,0.271-0.671,0.738-0.671,1.248v4.166  c0,0.82,0.675,1.5,1.5,1.5c0.814,0,1.5-0.68,1.5-1.5v-3.377c6.998-4.977,11.146-12.979,11.146-21.575c0,0-0.002-1.334-0.008-3.168  h4.684c0.826,0,1.5-0.671,1.5-1.5V25.352C83.34,24.519,82.672,23.848,81.84,23.848z M59.727,18.148c0-1.979,1.615-3.601,3.602-3.601  c1.984,0,3.605,1.615,3.605,3.601v5.697h-7.201L59.727,18.148z M49.525,16.05c0-1.979,1.613-3.6,3.6-3.6  c1.988,0,3.605,1.604,3.605,3.6v7.796h-7.201L49.525,16.05L49.525,16.05z M39.323,18.148c0-1.979,1.613-3.601,3.603-3.601  c1.985,0,3.604,1.615,3.604,3.601v5.697h-7.201L39.323,18.148L39.323,18.148z M29.124,22.347c0-1.979,1.615-3.6,3.604-3.6  c1.982,0,3.6,1.614,3.6,3.6v1.5h-7.188L29.124,22.347L29.124,22.347z M19.674,26.848h6.432c-0.611,3.25-3.18,5.815-6.432,6.438  V26.848z M19.674,57.902v-6.438c3.25,0.614,5.813,3.188,6.43,6.438H19.674z M80.34,57.902h-3.187  c-0.004-1.773-0.006-3.611-0.008-5.038c0.936-0.687,2.014-1.169,3.188-1.396L80.34,57.902L80.34,57.902z M80.34,48.443  c-1.164,0.148-2.265,0.519-3.281,1.012c-0.412-2.833-2.547-4.678-5.594-4.678c-2.591,0-5.322,1.396-7.314,3.729  c-1.465,1.725-3.17,4.716-3.482,9.396h-31.52c-0.672-4.908-4.564-8.793-9.463-9.462V36.297c4.896-0.669,8.793-4.555,9.465-9.46  h41.74c0.668,4.907,4.559,8.794,9.459,9.463L80.34,48.443L80.34,48.443z M80.34,33.279c-3.25-0.614-5.813-3.188-6.431-6.438h6.431  V33.279z"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="SHAPE510" class="ladi-element">
                                                <div class="ladi-shape ladi-transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgba(6, 65, 65, 1.0)">
                                                        <path
                                                            d="M15,9H11V11H13A2,2 0 0,1 15,13V15C15,16.11 14.1,17 13,17H11A2,2 0 0,1 9,15V9C9,7.89 9.9,7 11,7H15M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M11,15H13V13H11V15Z"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="PARAGRAPH511" class="ladi-element"><div class="ladi-paragraph ladi-transition">Thanh toán sau khi nhận và kiểm tra hàng</div></div>
                                </div>
                            </div>
                            <div id="GROUP512" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="GROUP513" class="ladi-element">
                                        <div class="ladi-group">
                                            <div id="GROUP514" class="ladi-element">
                                                <div class="ladi-group">
                                                    <div id="BOX515" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                                    <div id="SHAPE516" class="ladi-element">
                                                        <div class="ladi-shape ladi-transition">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                version="1.1"
                                                                viewBox="0 0 96 96"
                                                                x="0px"
                                                                y="0px"
                                                                preserveAspectRatio="none"
                                                                width="100%"
                                                                height="100%"
                                                                class=""
                                                                fill="rgba(255, 242, 243, 1.0)"
                                                            >
                                                                <path d="M84 40h-4v-11.656c0-11.028-14.272-24.344-32-24.344s-32 13.316-32 24.344v11.656h-4v-11.656c0-13.1 15.728-28.344 36-28.344s36 15.244 36 28.344v11.656z" />
                                                                <path d="M94 72h-12c-1.1 0-2-0.9-2-2v-32c0-1.1 0.9-2 2-2h12c1.1 0 2 0.9 2 2v32c0 1.1-0.9 2-2 2zM84 68h8v-28h-8v28z" />
                                                                <path d="M14 72h-12c-1.104 0-2-0.9-2-2v-32c0-1.1 0.896-2 2-2h12c1.104 0 2 0.9 2 2v32c0 1.1-0.896 2-2 2zM4 68h8v-28h-8v28z" />
                                                                <path
                                                                    d="M48 79.884c-16.244 0-28-21.772-28-36.452v-7.088c0-15.46 12.56-28.040 28-28.040 15.436 0 28 12.548 28 27.952v8.084c0 15.996-12.92 35.544-28 35.544zM48 12.296c-13.236 0-24 10.78-24 24.040v7.084c0 12.812 10.752 32.448 24 32.448 12.7 0 24-17.64 24-31.552v-8.076c0-13.192-10.764-23.944-24-23.944z"
                                                                />
                                                                <path
                                                                    d="M66 96h-16.188c-3.204 0-5.812-2.608-5.812-5.812 0-3.58 2.608-6.188 5.812-6.188h16.188c1.1 0 2 0.9 2 2v8c0 1.1-0.9 2-2 2zM49.812 88c-1 0-1.812 0.812-1.812 1.812 0 1.376 0.812 2.188 1.812 2.188h14.188v-4h-14.188z"
                                                                />
                                                                <path
                                                                    d="M72.252 92h-4.252c-1.1 0-2-0.9-2-2s0.9-2 2-2h4.252c4.272 0 7.752-3.476 7.752-7.752v-12.248c0-1.1 0.896-2 2-2s2 0.9 2 2v12.252c-0.004 6.484-5.276 11.748-11.752 11.748z"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="SHAPE517" class="ladi-element">
                                                <div class="ladi-shape ladi-transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgba(6, 65, 65, 1.0)">
                                                        <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M11,17L15,9V7H9V9H13L9,17H11Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="PARAGRAPH518" class="ladi-element"><div class="ladi-paragraph ladi-transition">Các chuyên viên luôn sẵn sàng giải đáp các thắc mắc của bạn</div></div>
                                </div>
                            </div>
                            <div id="GROUP519" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="GROUP520" class="ladi-element">
                                        <div class="ladi-group">
                                            <div id="GROUP521" class="ladi-element">
                                                <div class="ladi-group">
                                                    <div id="BOX522" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                                    <div id="SHAPE523" class="ladi-element">
                                                        <div class="ladi-shape ladi-transition">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                version="1.1"
                                                                x="0px"
                                                                y="0px"
                                                                viewBox="0 0 100 100"
                                                                enable-background="new 0 0 100 100"
                                                                xml:space="preserve"
                                                                preserveAspectRatio="none"
                                                                width="100%"
                                                                height="100%"
                                                                class=""
                                                                fill="rgba(255, 242, 243, 1.0)"
                                                            >
                                                                <path
                                                                    d="M93.3,39.3c0.6-1.1,0.7-2.3,0.3-3.5c-0.4-1.2-1.2-2.1-2.3-2.7L81.2,28c-0.3-0.2-0.6-0.5-0.6-0.9l-1.8-11.3  c-0.4-2.2-2.2-3.9-4.5-3.9c-0.2,0-0.5,0-0.7,0.1l-11.3,1.8c-0.4,0.1-0.7-0.1-1-0.3l-8-8.1c-0.9-0.9-2-1.3-3.2-1.3  c-1.2,0-2.4,0.5-3.2,1.3l-8,8.1c-0.2,0.2-0.5,0.3-0.8,0.3c-0.1,0-0.1,0-0.2,0l-11.3-1.8c-0.2,0-0.5-0.1-0.7-0.1  c-2.3,0-4.2,1.6-4.5,3.9l-1.8,11.3c-0.1,0.4-0.3,0.7-0.6,0.9L8.7,33.2c-1.1,0.6-1.9,1.5-2.3,2.7C6,37,6.1,38.2,6.7,39.3l5.2,10.1  c0.2,0.3,0.2,0.7,0,1.1L6.7,60.7C6.1,61.8,6,63,6.4,64.2c0.4,1.2,1.2,2.1,2.3,2.7L18.8,72c0.3,0.2,0.6,0.5,0.6,0.9l1.8,11.3  c0.4,2.2,2.2,3.9,4.5,3.9c0.2,0,0.5,0,0.7-0.1l11.3-1.8c0.4-0.1,0.7,0.1,1,0.3l8,8.1c0.9,0.9,2,1.3,3.2,1.3c1.2,0,2.4-0.5,3.2-1.3  l8-8.1c0.3-0.3,0.6-0.4,1-0.3l11.3,1.8c0.2,0,0.5,0.1,0.7,0.1c2.3,0,4.2-1.6,4.5-3.9l1.8-11.3c0.1-0.4,0.3-0.7,0.6-0.9l10.2-5.2  c1.1-0.6,1.9-1.5,2.3-2.7c0.4-1.2,0.3-2.4-0.3-3.5l-5.2-10.1c-0.2-0.3-0.2-0.7,0-1.1L93.3,39.3z M85.1,52.1l5.2,10.1  c0.1,0.3,0.2,0.6,0.1,0.9c-0.1,0.3-0.3,0.5-0.6,0.7L79.6,69c-1.3,0.7-2.2,1.9-2.4,3.4l-1.8,11.3c-0.1,0.6-0.7,1.1-1.3,1l-11.3-1.8  c-1.4-0.2-2.9,0.3-4,1.3l-8,8.1c-0.4,0.4-1.2,0.4-1.6,0l-8-8.1c-0.9-0.9-2-1.3-3.2-1.3c-0.2,0-0.5,0-0.7,0.1l-11.3,1.8  c-0.6,0.1-1.2-0.3-1.3-1l-1.8-11.3c-0.2-1.4-1.1-2.7-2.4-3.4l-10.2-5.2c-0.3-0.1-0.5-0.4-0.6-0.7c-0.1-0.3-0.1-0.6,0.1-0.9l5.2-10.1  c0.7-1.3,0.7-2.9,0-4.2L9.7,37.8c-0.1-0.3-0.2-0.6-0.1-0.9c0.1-0.3,0.3-0.5,0.6-0.7L20.4,31c1.3-0.7,2.2-1.9,2.4-3.4l1.8-11.3  c0.1-0.6,0.7-1.1,1.3-1l11.3,1.8c0.2,0,0.5,0.1,0.7,0.1c0,0,0,0,0,0c1.2,0,2.4-0.5,3.2-1.3l8-8.1c0.4-0.4,1.2-0.4,1.6,0l8,8.1  c1,1,2.5,1.5,4,1.3l11.3-1.8c0.6-0.1,1.2,0.3,1.3,1l1.8,11.3c0.2,1.4,1.1,2.7,2.4,3.4l10.2,5.2c0.3,0.1,0.5,0.4,0.6,0.7  c0.1,0.3,0.1,0.6-0.1,0.9l-5.2,10.1C84.4,49.2,84.4,50.8,85.1,52.1z M64.7,38.9h-8.5V33c0-3-0.9-5.2-2.7-6.5c-2.7-2-6.3-1-6.7-0.8  c-0.7,0.2-1.2,0.9-1.2,1.6v7.4c0,5.3-6.3,7.2-6.5,7.2c-0.2,0-0.3,0.1-0.5,0.2c-0.6-0.5-1.4-0.8-2.2-0.8h-5.2c-2,0-3.6,1.6-3.6,3.6  v18.2c0,2,1.6,3.6,3.6,3.6h5.2c0.9,0,1.8-0.4,2.4-1c1.1,1,2.6,1.6,4.3,1.6h18c4.3,0,7.1-2.4,7.6-6.3l2.4-15.4c0-0.1,0-0.2,0-0.3  C71.3,41.8,68.3,38.9,64.7,38.9z M36.6,63.2c0,0.1-0.1,0.2-0.2,0.2h-5.2c-0.1,0-0.2-0.1-0.2-0.2V44.9c0-0.1,0.1-0.2,0.2-0.2h5.2  c0.1,0,0.2,0.1,0.2,0.2V63.2z M65.4,60.6C65.4,60.6,65.4,60.7,65.4,60.6C65.3,61.5,65,64,61.2,64h-18c-1.7,0-3.1-1.4-3.1-3.1V45.2  c0,0,0,0,0,0c0.4-0.1,9-2.6,9-10.5v-5.9c0.8-0.1,1.8,0,2.5,0.5c0.9,0.6,1.3,1.9,1.3,3.7v7.6c0,0.9,0.8,1.7,1.7,1.7h10.2  c1.7,0,3.1,1.3,3.1,3L65.4,60.6z"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="SHAPE524" class="ladi-element">
                                                <div class="ladi-shape ladi-transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgba(6, 65, 65, 1.0)">
                                                        <path
                                                            d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M11,17H13A2,2 0 0,0 15,15V13.5A1.5,1.5 0 0,0 13.5,12A1.5,1.5 0 0,0 15,10.5V9C15,7.89 14.1,7 13,7H11A2,2 0 0,0 9,9V10.5A1.5,1.5 0 0,0 10.5,12A1.5,1.5 0 0,0 9,13.5V15C9,16.11 9.9,17 11,17M11,13H13V15H11V13M11,9H13V11H11V9Z"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="PARAGRAPH525" class="ladi-element">
                                        <div class="ladi-paragraph ladi-transition">Sức khỏe cải thiện ngay sau khi sử dụng<br /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="SECTION174" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="PARAGRAPH175" class="ladi-element">
                        <div class="ladi-paragraph ladi-transition"><span style="font-weight: bold;">NHẬN XÉT CỦA KHÁCH HÀNG ĐÃ SỬ DỤNG HYPERCARE</span></div>
                    </div>
                    <div id="GROUP527" class="ladi-element">
                        <div class="ladi-group">
                            <div id="BOX179" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                            <div id="PARAGRAPH181" class="ladi-element"><div class="ladi-paragraph ladi-transition">Vũ Quang Trung, 53 tuổi, Hà Nội</div></div>
                            <div id="PARAGRAPH182" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    Tôi đã bị bệnh trong một thời gian dài. Nhưng ban đầu tôi còn chủ quan, nghĩ uống thuốc tây sẽ đỡ, ai ngờ bệnh tính kéo dài triền miên, mãi không khỏi. Thậm chí tôi còn rơi vào bi kịch: YẾU SINH LÍ khiến
                                    tình cảm vợ chồng lục đục. Và tất cả điều này là do những cơn đau đầu liên tục, mất ngủ, cáu kỉnh gây nên. Vài tháng trước, tôi bắt đầu dùng Hypercare. Ban đầu tôi cũng nghi ngờ hiệu quả, nhưng bây giờ
                                    tôi có thể tự tin khuyên mọi người sử dụng Hypercare để chống lại những triệu chứng do bệnh cao huyết áp gây nên. Tôi đã dùng hơn 2 tháng nay rồi và giờ đây tôi đã lấy lại được phong độ đàn ông như
                                    xưa!&nbsp;
                                </div>
                            </div>
                            <div id="IMAGE526" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP528" class="ladi-element">
                        <div class="ladi-group">
                            <div id="BOX529" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                            <div id="PARAGRAPH530" class="ladi-element"><div class="ladi-paragraph ladi-transition">Đào Tuấn Anh, 41 tuổi, Hòa Bình</div></div>
                            <div id="PARAGRAPH531" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    Tôi đã tìm kiếm khắp nơi một phương pháp hữu hiệu để cải thiện tình trạng huyết áp cao của mình trong thời gian qua. Một số loại khiến tôi bị suy nhược cơ thể, yếu hẳn đi, thị lực giảm sút, chức năng thận
                                    và gan kém. Từ hồi được bạn giới thiệu Hypercare, tôi đã mua về thử dùng và đúng là hiệu quả đỉnh cao. Đúng là tiền nào của nấy! Ước sao tôi biết đến sản phẩm này sớm hơn thì tôi đã không phải dùng những
                                    loại thuốc hại cơ thể kia! Chiết xuất tự nhiên luôn là đỉnh nhất!&nbsp;
                                </div>
                            </div>
                            <div id="IMAGE532" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP533" class="ladi-element">
                        <div class="ladi-group">
                            <div id="BOX534" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                            <div id="PARAGRAPH535" class="ladi-element"><div class="ladi-paragraph ladi-transition">Trịnh Minh Tâm, 47 tuổi, Thanh Hóa</div></div>
                            <div id="PARAGRAPH536" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    Tôi phát hiện mình mắc bệnh cao huyết áp cũng được hơn 5 năm rồi. Từ đó cuộc sống của tôi gắn liền với thuốc Tây, không thể nào trị dứt điểm căn bệnh được, cứ ngưng dùng thuốc là bệnh cao huyết áp lại tái
                                    phát. Tình cờ tôi lên mạng và thấy thông tin về sản phẩm dạng sủi trị cao huyết áp tên là Hypercare nên tôi đặt mua về dùng thử. Không ngờ nó lại có hiệu quả thực sự, huyết áp của tôi ổn định chỉ sau 1
                                    tháng. Tôi kiên trì sử dụng hết liệu trình thì nay đã hoàn toàn ổn định. Đến nay, tôi đã ngưng uống Hypercare được 6 tháng nhưng huyết áp vẫn tốt. Tôi rất hài lòng.
                                </div>
                            </div>
                            <div id="IMAGE537" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="SECTION538" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="GROUP540" class="ladi-element">
                        <div class="ladi-group">
                            <div id="BOX541" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                            <div id="PARAGRAPH542" class="ladi-element"><div class="ladi-paragraph ladi-transition">Phùng Đức Huy, 57 tuổi, Thái Bình</div></div>
                            <div id="PARAGRAPH543" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    Ba năm trước tôi được chẩn đoán bị tăng huyết áp, suy tim... Tôi thấy buồn lắm, nghe bảo căn bệnh này là bệnh mãn tính, không thể trị dứt điểm được. Tôi tìm hiểu và được biết nếu uống thuốc tây trong thời
                                    gian dài thì có thể dẫn đến biến chứng nên tôi ưu tiên sử dụng các loại thuốc nam nhưng uống mãi không có hiệu quả, công đoạn chế biến lại phức tạp. May mắn tôi được bạn giới thiệu sử dụng Hypercare, chỉ
                                    chưa đầy 1 tháng mọi triệu chứng của bệnh cao huyết áp biến mất hoàn toàn. Tôi bất ngờ lắm, cảm ơn Hypercare rất nhiều!
                                </div>
                            </div>
                            <div id="IMAGE544" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP545" class="ladi-element">
                        <div class="ladi-group">
                            <div id="BOX546" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                            <div id="PARAGRAPH547" class="ladi-element"><div class="ladi-paragraph ladi-transition">Nguyễn Mai Hoa, 61 tuổi, Nghệ An</div></div>
                            <div id="PARAGRAPH548" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    Em gái tôi ở ngoài Bắc cũng bị cao huyết áp và đã chữa khỏi, nó giới thiệu cho tôi sử dụng sản phẩm này, bảo là thành phần thảo dược tự nhiên nên sử dụng an toàn lắm, không lo lắng tác dụng phụ. Nghe vậy
                                    tôi đặt mua luôn 2 hộp, uống chưa hết 1 hộp là tôi đã thấy người khỏe hẳn, các triệu chứng bệnh cao huyết áp cũng biến mất, tôi dùng hết liệu trình để khỏi hẳn bệnh. Tôi cũng giới thiệu cho bạn mình sử
                                    dụng sản phẩm này và giờ họ cũng đã chữa khỏi cao huyết áp như tôi. Hypercare thật tuyệt vời!
                                </div>
                            </div>
                            <div id="IMAGE549" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP555" class="ladi-element">
                        <div class="ladi-group">
                            <div id="BOX556" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                            <div id="PARAGRAPH557" class="ladi-element"><div class="ladi-paragraph ladi-transition">Nguyễn Quang Lâm, 70 tuổi, Thái Nguyên</div></div>
                            <div id="PARAGRAPH558" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    Tôi đã phải sống chung với bệnh huyết áp cao trong hơn 20 năm. Tôi đã thử tất cả phương pháp ngay cả các công thức của y học cổ truyền nhưng tình trạng sức khỏe ngày càng xấu đi. Tôi chỉ có thể nằm một
                                    chỗ vì hễ cứ đi lại là lại mệt đứt ruột. Tôi vô tình biết đến Hypercare qua ông bạn hàng xóm và đặt hàng để dùng thử, và kết quả rất tốt. Sức khỏe của tôi đã được phục hồi, và tôi không chỉ có thể đi dạo
                                    phố mà còn có thể ghé thăm câu lạc bộ cờ vua yêu thích của mình vào mỗi chiều cuối tuần.
                                </div>
                            </div>
                            <div id="IMAGE559" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="SECTION712" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="IMAGE713" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="GROUP714" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH715" class="ladi-element"><div class="ladi-paragraph ladi-transition">ỔN ĐỊNH HUYẾT ÁP CHỈ SAU 1 LIỆU TRÌNH HYPERCARE</div></div>
                            <div id="GROUP716" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="PARAGRAPH717" class="ladi-element"><div class="ladi-paragraph ladi-transition">An toàn và không có tác dụng phụ</div></div>
                                    <div id="SHAPE718" class="ladi-element">
                                        <div class="ladi-shape ladi-transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1664 1896.0833" class="" fill="rgba(216, 31, 16, 1.0)">
                                                <use xlink:href="#shape_NUfGtMANFy" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP719" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="PARAGRAPH720" class="ladi-element"><div class="ladi-paragraph ladi-transition">Không bị phụ thuộc vào thuốc</div></div>
                                    <div id="SHAPE721" class="ladi-element">
                                        <div class="ladi-shape ladi-transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1664 1896.0833" class="" fill="rgba(216, 31, 16, 1.0)">
                                                <use xlink:href="#shape_NUfGtMANFy" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP722" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="PARAGRAPH723" class="ladi-element"><div class="ladi-paragraph ladi-transition">Tiết kiệm chi phí với ưu đãi giảm giá 50%&nbsp;</div></div>
                                    <div id="SHAPE724" class="ladi-element">
                                        <div class="ladi-shape ladi-transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1664 1896.0833" class="" fill="rgba(216, 31, 16, 1.0)">
                                                <use xlink:href="#shape_NUfGtMANFy" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP725" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH726" class="ladi-element"><div class="ladi-paragraph ladi-transition">CÁCH SỬ DỤNG HYPERCARE</div></div>
                            <div id="GROUP727" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="PARAGRAPH728" class="ladi-element"><div class="ladi-paragraph ladi-transition">Hòa tan 1 viên trong 100-200ml nước ấm hoặc lạnh chờ viên tan hết mới uống.</div></div>
                                    <div id="SHAPE729" class="ladi-element">
                                        <div class="ladi-shape ladi-transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1664 1896.0833" class="" fill="rgba(216, 31, 16, 1.0)">
                                                <use xlink:href="#shape_NUfGtMANFy" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP730" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="PARAGRAPH731" class="ladi-element"><div class="ladi-paragraph ladi-transition">Ngày uống 2 lần</div></div>
                                    <div id="SHAPE732" class="ladi-element">
                                        <div class="ladi-shape ladi-transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1664 1896.0833" class="" fill="rgba(216, 31, 16, 1.0)">
                                                <use xlink:href="#shape_NUfGtMANFy" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP733" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="PARAGRAPH734" class="ladi-element"><div class="ladi-paragraph ladi-transition">Sử dụng đúng liệu trình để đạt được hiệu quả tốt nhất</div></div>
                                    <div id="SHAPE735" class="ladi-element">
                                        <div class="ladi-shape ladi-transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1664 1896.0833" class="" fill="rgba(216, 31, 16, 1.0)">
                                                <use xlink:href="#shape_NUfGtMANFy" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP607" class="ladi-element">
                        <div class="ladi-group">
                            <div id="PARAGRAPH608" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition"><span style="font-weight: 700;">CHỨNG CAO HUYẾT ÁP</span></div>
                            </div>
                            <div id="PARAGRAPH609" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition"><span style="font-weight: 700;">TRỊ TẬN GỐC</span></div>
                            </div>
                            <div id="PARAGRAPH610" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">Sản phẩm được làm từ&nbsp;100% thiên nhiên<br /></div>
                            </div>
                            <div id="IMAGE611" class="ladi-element">
                                <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="SECTION571" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="LINE572" class="ladi-element">
                        <div class="ladi-line"><div class="ladi-line-container"></div></div>
                    </div>
                    <div id="GROUP574" class="ladi-element">
                        <div class="ladi-group">
                            <div id="GROUP575" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX576" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="BOX577" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="FORM578" data-config-id="639ff785f8e8230012acf2c8" class="ladi-element">
                                        <form action="send.php" method="post" class="ladi-form">
                                            <div id="FORM_ITEM581" class="ladi-element">
                                                <div class="ladi-form-item-container">
                                                    <div class="ladi-form-item-background"></div>
                                                    <div class="ladi-form-item"><input name="name" required class="ladi-form-control" type="text" placeholder="Họ và tên" value /></div>
                                                </div>
                                            </div>
                                            <div id="FORM_ITEM582" class="ladi-element">
                                                <div class="ladi-form-item-container">
                                                    <div class="ladi-form-item-background"></div>
                                                    <div class="ladi-form-item"><input name="phone" required class="ladi-form-control" type="tel" placeholder="Số điện thoại" value /></div>
                                                </div>
                                            </div>
                                            <div id="BUTTON579" class="ladi-element">
                                                <button type="submit" class="ladi-button ladi-transition">
                                                    <div class="ladi-button-background"></div>
                                                    <div id="BUTTON_TEXT579" class="ladi-element ladi-button-headline"><p class="ladi-headline ladi-transition">Đặt hàng ngay</p></div>
                                                </button>
                                            </div>
                                            <input type="hidden" name="aff_click_id" value="<?php echo $_SESSION["aff_click_id"]; ?>"/>
                                            <input type="hidden" name="sub1" value="<?php echo $_SESSION["sub1"]; ?>">
                                            <input type="hidden" name="pixel" value="<?php echo $_SESSION["pixel"]; ?>">
                                            <input type="hidden" name="custom1" value="<?php echo $_SESSION["custom1"]; ?>">
                                            <input type="hidden" name="sub_id2" value="<?php echo $_SESSION["sub_id2"]; ?>">
                                            <input type="hidden" name="sub_id3" value="<?php echo $_SESSION["sub_id3"]; ?>">
                                            <input type="hidden" name="sub_id4" value="<?php echo $_SESSION["sub_id4"]; ?>">
                                            <input type="hidden" name="sub_id5" value="<?php echo $_SESSION["sub_id5"]; ?>">
                                            <input type="hidden" name="aff_param1" value="<?php echo $_SESSION["aff_param1"]; ?>">
                                            <input type="hidden" name="aff_param2" value="<?php echo $_SESSION["aff_param2"]; ?>">
                                            <input type="hidden" name="aff_param3" value="<?php echo $_SESSION["aff_param3"]; ?>">
                                            <input type="hidden" name="aff_param4" value="<?php echo $_SESSION["aff_param4"]; ?>">
                                            <input type="hidden" name="aff_param5" value="<?php echo $_SESSION["aff_param5"]; ?>">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP584" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="PARAGRAPH585" class="ladi-element">
                                        <div class="ladi-paragraph ladi-transition">Giờ<br /></div>
                                    </div>
                                    <div id="PARAGRAPH586" class="ladi-element">
                                        <div class="ladi-paragraph ladi-transition">Phút<br /></div>
                                    </div>
                                    <div id="PARAGRAPH587" class="ladi-element"><div class="ladi-paragraph ladi-transition">Giây</div></div>
                                    <div id="COUNTDOWN588" class="ladi-element">
                                        <div class="ladi-countdown" id="countdown1">
                                            <div id="COUNTDOWN_ITEM589" class="ladi-element">
                                                <div class="ladi-countdown-background"></div>
                                                <div class="ladi-countdown-text"><span>00</span></div>
                                            </div>
                                            <div id="COUNTDOWN_ITEM590" class="ladi-element">
                                                <div class="ladi-countdown-background"></div>
                                                <div class="ladi-countdown-text"><span class="hours">00</span></div>
                                            </div>
                                            <div id="COUNTDOWN_ITEM591" class="ladi-element">
                                                <div class="ladi-countdown-background"></div>
                                                <div class="ladi-countdown-text"><span class="minutes">00</span></div>
                                            </div>
                                            <div id="COUNTDOWN_ITEM592" class="ladi-element">
                                                <div class="ladi-countdown-background"></div>
                                                <div class="ladi-countdown-text"><span class="seconds">00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="HEADLINE593" class="ladi-element">
                                <h3 class="ladi-headline ladi-transition">
                                    <span style="font-weight: 700;">* Giảm 10% với các giao dịch thanh toán qua chuyển khoản <br /></span>+ Đơn hàng sẽ được ship đến TẬN NHÀ theo đúng yêu cầu của bạn<br />
                                </h3>
                            </div>
                            <div id="BOX595" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                            <div id="HEADLINE583" class="ladi-element"><h3 class="ladi-headline ladi-transition">Chương trình khuyến mại 50% kết thúc trong</h3></div>
                        </div>
                    </div>
                    <div id="IMAGE604" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="IMAGE606" class="ladi-element">
                        <div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="GROUP624" class="ladi-element">
                        <div class="ladi-group">
                            <div id="SHAPE625" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 311.78 187.07" fill='url("#SHAPE625_desktop_gradient")'>
                                        <defs id="SHAPE625_defs">
                                            <lineargradient id="SHAPE625_desktop_gradient" gradientTransform="rotate(0)">
                                                <stop offset="0%" stop-color="rgba(216, 29, 16, 1.0)" />
                                                <stop offset="100%" stop-color="rgba(99, 6, 1, 1.0)" />
                                            </lineargradient>
                                        </defs>
                                        <path d="M13,14.49.06,170a15.8,15.8,0,0,0,17.51,17l280.19-31.73A15.8,15.8,0,0,0,311.57,137L292.68,22a15.79,15.79,0,0,0-15-13.23L29.29,0A15.79,15.79,0,0,0,13,14.49Z" />
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH626" class="ladi-element">
                                <div class="ladi-paragraph ladi-transition">
                                    <span class="ladipage-animated-headline rotate-3"><span class="ladipage-animated-words-wrapper" data-word='["590.000đ/hộp"]'>&nbsp;590.000đ/hộp</span></span>
                                </div>
                            </div>
                            <div id="PARAGRAPH627" class="ladi-element"><div class="ladi-paragraph ladi-transition">&nbsp;1.180.000đ/hộp</div></div>
                            <div id="LINE628" class="ladi-element">
                                <div class="ladi-line"><div class="ladi-line-container"></div></div>
                            </div>
                            <div id="SHAPE629" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 171.59 198.14" fill="rgba(216, 30, 16, 1.0)"><use xlink:href="#shape_KyeCCndxhC" /></svg>
                                </div>
                            </div>
                            <div id="SHAPE630" class="ladi-element">
                                <div class="ladi-shape ladi-transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 32.25 32.25" fill="rgba(145, 23, 16, 1.0)"><use xlink:href="#shape_MWOhfqnLZC" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP692" class="ladi-element">
                        <div class="ladi-group">
                            <div id="GROUP693" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX694" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="BOX695" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="BOX696" class="ladi-element"><div class="ladi-box ladi-transition"></div></div>
                                    <div id="LINE697" class="ladi-element">
                                        <div class="ladi-line"><div class="ladi-line-container"></div></div>
                                    </div>
                                    <div id="LINE698" class="ladi-element">
                                        <div class="ladi-line"><div class="ladi-line-container"></div></div>
                                    </div>
                                    <div id="HEADLINE699" class="ladi-element">
                                        <h3 class="ladi-headline ladi-transition">Mua 5 hộp<br /></h3>
                                    </div>
                                    <div id="HEADLINE700" class="ladi-element"><h3 class="ladi-headline ladi-transition">2,950,000</h3></div>
                                    <div id="HEADLINE701" class="ladi-element"><h3 class="ladi-headline ladi-transition">2,094,500</h3></div>
                                    <div id="HEADLINE705" class="ladi-element">
                                        <h3 class="ladi-headline ladi-transition">Mua 3 hộp<br /></h3>
                                    </div>
                                    <div id="HEADLINE706" class="ladi-element"><h3 class="ladi-headline ladi-transition">1,770,000&nbsp;</h3></div>
                                    <div id="HEADLINE707" class="ladi-element"><h3 class="ladi-headline ladi-transition">1,699,200</h3></div>
                                </div>
                            </div>
                            <div id="HEADLINE708" class="ladi-element"><h3 class="ladi-headline ladi-transition">COMBO KHUYẾN MẠI</h3></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="SECTION260" class="ladi-section">
                <div class="ladi-section-background loaded"></div>
                <div class="ladi-container">
                    <div id="PARAGRAPH261" class="ladi-element">
                        <div class="ladi-paragraph ladi-transition">
                            © 2021 Copyright. All rights reserved.<br />
                            Privacy policy | Report<br />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="backdrop-popup" class="backdrop-popup"></div>
        <div id="backdrop-dropbox" class="backdrop-dropbox"></div>
        <div id="lightbox-screen" class="lightbox-screen"></div>

        <script src="js/notify.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script>
            $("#BUTTON_TEXT29").click(function (e) {
                var str = $("#FORM28").find('input[name="phone"]').val();
                var trim = str.replace(/[_\W]+/g, "");
                intRegex = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/g;
                if (trim.length > 13 || trim.length < 8) {
                    alert("The phone number must more than 8 and less than 14");
                    e.preventDefault();
                    return false;
                }
                if (!intRegex.test(trim)) {
                    alert("Please enter a valid phone number.");
                    e.preventDefault();
                    return false;
                }
            });
            $("#FORM28")
                .find('input[name="phone"]')
                .keypress(function (e) {
                    var key = e.which;
                    if (key == 13) {
                        // the enter key code
                        var str = $("#FORM28").find('input[name="phone"]').val();
                        var trim = str.replace(/[_\W]+/g, "");
                        intRegex = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/g;
                        if (trim.length > 13 || trim.length < 8) {
                            alert("The phone number must more than 8 and less than 14");
                            e.preventDefault();
                            return false;
                        }
                        if (!intRegex.test(trim)) {
                            alert("Please enter a valid phone number.");
                            e.preventDefault();
                            return false;
                        }
                    }
                });
        </script>

        <script>
            $("#BUTTON_TEXT135").click(function (e) {
                var str = $("#FORM134").find('input[name="phone"]').val();
                var trim = str.replace(/[_\W]+/g, "");
                intRegex = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/g;
                if (trim.length > 13 || trim.length < 8) {
                    alert("The phone number must more than 8 and less than 14");
                    e.preventDefault();
                    return false;
                }
                if (!intRegex.test(trim)) {
                    alert("Please enter a valid phone number.");
                    e.preventDefault();
                    return false;
                }
            });
            $("#FORM134")
                .find('input[name="phone"]')
                .keypress(function (e) {
                    var key = e.which;
                    if (key == 13) {
                        // the enter key code
                        var str = $("#FORM134").find('input[name="phone"]').val();
                        var trim = str.replace(/[_\W]+/g, "");
                        intRegex = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/g;
                        if (trim.length > 13 || trim.length < 8) {
                            alert("The phone number must more than 8 and less than 14");
                            e.preventDefault();
                            return false;
                        }
                        if (!intRegex.test(trim)) {
                            alert("Please enter a valid phone number.");
                            e.preventDefault();
                            return false;
                        }
                    }
                });
        </script>

        <script>
            $("#BUTTON_TEXT579").click(function (e) {
                var str = $("#FORM578").find('input[name="phone"]').val();
                var trim = str.replace(/[_\W]+/g, "");
                intRegex = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/g;
                if (trim.length > 13 || trim.length < 8) {
                    alert("The phone number must more than 8 and less than 14");
                    e.preventDefault();
                    return false;
                }
                if (!intRegex.test(trim)) {
                    alert("Please enter a valid phone number.");
                    e.preventDefault();
                    return false;
                }
            });
            $("#FORM578")
                .find('input[name="phone"]')
                .keypress(function (e) {
                    var key = e.which;
                    if (key == 13) {
                        // the enter key code
                        var str = $("#FORM578").find('input[name="phone"]').val();
                        var trim = str.replace(/[_\W]+/g, "");
                        intRegex = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/g;
                        if (trim.length > 13 || trim.length < 8) {
                            alert("The phone number must more than 8 and less than 14");
                            e.preventDefault();
                            return false;
                        }
                        if (!intRegex.test(trim)) {
                            alert("Please enter a valid phone number.");
                            e.preventDefault();
                            return false;
                        }
                    }
                });
        </script>

        <script>
          document.querySelectorAll('div[data-action="true"], a:not([target="_blank"]').forEach(function (link) {
              link.addEventListener('click', function (e) {
                  e.preventDefault();
                  document.querySelector('#FORM578').scrollIntoView({behavior: "smooth", block: "center"});
              });
          });
        </script>

        <script type="text/javascript">
          window.ladi_viewport = function () {
              var screen_width = window.ladi_screen_width || window.screen.width;
              var width = window.outerWidth > 0 ? window.outerWidth : screen_width;
              var widthDevice = width;
              console.log("widthDevice",widthDevice, window)
              var is_desktop = width >= 768;
              var content = "";
              if (typeof window.ladi_is_desktop == "undefined" || window.ladi_is_desktop == undefined) {
                  window.ladi_is_desktop = is_desktop;
              }
              if (!is_desktop) {
                  widthDevice = 420;
              } else {
                  widthDevice = 1200;
              }
              content = "width=" + widthDevice;
              var scale = 1;
              if (!is_desktop && widthDevice != screen_width && screen_width > 0) {
                  scale = screen_width / widthDevice;
              }
              if (scale != 1) {
                  content += ", initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0";
              }
              var docViewport = document.getElementById("viewport");
              if (!docViewport) {
                  docViewport = document.createElement("meta");
                  docViewport.setAttribute("id", "viewport");
                  docViewport.setAttribute("name", "viewport");
                  document.head.appendChild(docViewport);
              }
              docViewport.setAttribute("content", content);
          };
          window.ladi_viewport();
          window.ladi_fbq_data = [];
          window.ladi_fbq = function (track_name, conversion_name, data, event_data) {
              window.ladi_fbq_data.push([track_name, conversion_name, data, event_data]);
          };
        </script>

        <div id="NOTIFY490" class='ladi-element ladi-notify-transition' style="top:0px;opacity: 0;">
          <div class="ladi-notify">
              <div class="ladi-notify-image"><img alt class="lazy" data-src="images/spiner.gif"/></div>
              <div class="ladi-notify-title">Nội dung cột [Title]</div>
              <div class="ladi-notify-content">Nội dung cột [Content]</div>
              <div class="ladi-notify-time">Nội dung cột [Time]</div>
          </div>
        </div>

        <script>
          document.addEventListener("scroll", function () {
              myLazy('img.lazy', 'src');
              myLazy('source.lazy', 'srcset');
              myLazy('.lazy-bg', 'img-bg');
              myLazy('.load', 'loaded');
              myLazy('.slide_run', 'slide');
          });

          function myLazy(sec, attr) {
              const section_loads = document.querySelectorAll(sec);
              let winTop = window.innerHeight;

              for (let i = 0; i < section_loads.length; i++) {
                  let pos_top = section_loads[i].getBoundingClientRect().top;
                  let pos_bottom = section_loads[i].getBoundingClientRect().bottom;
                  if (pos_top <= winTop && pos_bottom >= 0) {
                      switch (attr) {
                          case 'src':
                              section_loads[i].src = section_loads[i].dataset.src;
                              section_loads[i].classList.remove('lazy');
                              break;
                          case 'srcset':
                              section_loads[i].srcset = section_loads[i].dataset.srcset;
                              section_loads[i].classList.remove('lazy');
                              break;
                          case 'img-bg':
                              section_loads[i].classList.remove('lazy-bg');
                              section_loads[i].classList.add('img-bg');
                              break;
                          case 'loaded':
                              section_loads[i].classList.remove('load');
                              section_loads[i].classList.add('loaded');
                              break;
                          case 'slide':
                              section_loads[i].classList.add('slide');
                              break;
                          default:
                              console.log(`Sorry, we are out of ${attr}.`);
                      }

                  }
              }
          }
        </script>
        
    </body>
</html>
