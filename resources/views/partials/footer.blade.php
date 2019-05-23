<style>
    #footer-wrapper {
        text-align: center;
        background: #2a2a2a;
        color: rgba(255,255,255,.5);
        padding: 20px 20px 0 20px;
        margin: auto;
        margin-top: 20px;
    }
    .footer-column {
        position: relative;
        margin: 20px auto;
        clear: both;
        font-size: 14px;
        line-height: 24px;
        overflow: hidden;
        text-align: left;
        max-width: 920px;
    }
    .footer-column h3 {
        position: relative;
        margin: 0 0 10px 0;
        font-size: 16px;
        padding: 0 0 10px 0;
        border-bottom: 1px solid rgba(255,255,255,.1);
        color: rgba(255,255,255,.9);
        text-transform: uppercase;
    }
    h1, h2, h3, h4, h5, h6 {
        font-weight: 700;
        line-height: normal;
    }
    .footer-menu {
        float: left;
        width: 31%;
        margin: 0 20px 20px 0;
    }
    .footer-menu ul li a {
        color: rgba(255,255,255,.5);
    }
    #subscribe-footer .emailfooter {
        margin: auto;
        text-align: center;
    }
    #subscribe-footer .emailfooter form {
        margin: 0;
        padding: 0;
        float: left;
    }
    #subscribe-footer .emailfooter input {
        background: rgba(0,0,0,.15);
        padding: 12px;
        color: rgba(255,255,255,.5);
        font-size: 14px;
        margin-bottom: 10px;
        border: 0;
        transition: all .3s;
        line-height: normal;
        vertical-align: baseline;
    }
    #subscribe-footer .emailfooter .submitfooter {
        background: rgba(255,255,255,.11);
        color: #fff;
        margin: 0 0 0 5px;
        font-size: 14px;
        cursor: pointer;
        padding: 9px;
        border: 0;
        border-radius: 3px;
        transition: all .3s;
    }
    #subscribe-footer .emailfooter .submitfooter:hover {
        background: rgba(255,255,255,.18);
        color: #fff;
    }
    #footer-end {
        color: rgba(255,255,255,.5);
        background: rgba(0,0,0,0.16);
        position: relative;
        display: block;
        max-width: 920px;
        margin: auto;
        padding: 20px 20px 15px 20px;
    }
    .hypecredit {
        display: block;
        position: relative;
        padding: 0 0 5px 0;
        font-size: 13px;
    }
    .hypecredit a {
        color: rgba(255,255,255,.5);
    }
    .contact-trigger {
        cursor: pointer;
        display: inline-block;
        border-radius: 3px;
        margin: 5px;
        padding: 10px 15px;
        background: rgba(255,255,255,.11);
        color: #fff;
        position: absolute;
        right: 13px;
        top: 13px;
        transition: all .3s ease-in-out;
    }
    .contact-trigger:hover {
        background: rgba(255,255,255,.18);
        color: #fff;
    }
    .contact-trigger i {
        margin: 0 5px 0 0;
    }
    .mask, .contact-pop {
        display: none;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        transition: all .3s ease-in-out;
    }
    .fa {
        display: inline-block;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
</style>
<footer id="footer-wrapper">
    <div class="footer-column">
        <div class="footer-menu">
            <h3>New Line</h3>
            <ul class="footer2 line">
                <li><a href="#" title="About us">About</a></li>
                <li><a href="#" title="Contact us">Contact</a></li>
                <li><a href="#" title="Disclaimer">Disclaimer</a></li>
                <li><a href="#" title="Daftar Isi Blog">Sitemap</a></li>
            </ul>
        </div>
        <div class="footer-menu">
            <h3>Web Tools</h3>
            <ul class="footer2 line">
                <li><a href="#" title="CSS Minifier">CSS Minifier</a></li>
                <li><a href="#" title="HTML Converter">HTML Converter</a></li>
                <li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
                <li><a href="#" title="Terms of Service">Terms of Service</a></li>
            </ul>
        </div>
        <div class="footer-menu" id="subscribe-footer">
            <h3>Newsletter</h3>
            <p>Subscribe here to receive new updates</p>
            <div class="emailfooter">
                <form action="https://feedburner.google.com/fb/a/mailverify" method="post" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=Invision2016', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" target="popupwindow">
                    <input name="email" onblur="if (this.value == &quot;&quot;) {this.value = &quot;Email address&quot;;}" onfocus="if (this.value == &quot;Email address&quot;) {this.value = &quot;&quot;;}" type="text" value="Email address">
                    <input name="uri" type="hidden" value="Invision2016">
                    <input name="loc" type="hidden" value="en_US">
                    <input class="submitfooter" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <div id="footer-end">
        <div class="hypecredit">
            Copyright © <span id="current-year">2019</span>
            <a href="https://invisiontheme.blogspot.com/" itemprop="creator" itemscope="itemscope" itemtype="https://schema.org/Person"><span itemprop="name">Emzari</span></a> All Right Reserved
        </div>
        <div class="hypecredit">
            Template by <a class="terserahlo" href="//www.arlinadzgn.com/" target="_blank" title="Arlina Design">Emzari</a>
        </div>
        <div class="contact-trigger"><i class="fa fa-envelope-o"></i> Contact</div>
    </div>
</footer>