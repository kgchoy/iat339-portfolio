<!--     <footer class="footer" role="contentinfo">

        <div class="copyright">
            <?php echo $site->copyright()->kirbytext() ?>
            <span class="oi icon" data-glyph="document" title="resume" aria-hidden="true">Resume</span>

        </div>

    </footer> -->


        <footer class="footer" role="contentinfo">
            <div id="centeredFooterContainer">
                <div id="footerBar">
                    <div id="footerBarLeft">
                        <?php echo $site->copyright()->kirbytext() ?>
                    </div> <!-- ./footerBarLeft -->
                    <div id="footerBarRight">
                        <ul class="menu-items-list">
                            <li><a class="button-nav button-footer-nav" href="assets/doc/resume.pdf"><img class="footer-icon" src="<?php echo url('assets/images/icon-resume.png') ?>" alt="Resume icon" height="20" />Resume</a></li>
                            <li><a class="button-nav button-footer-nav" href="mailto:kgchoy@sfu.ca"><img class="footer-icon" src="<?php echo url('assets/images/icon-email.png') ?>" alt="Email icon" height="20" />Email</a></li>
                            <li><a class="button-nav button-footer-nav" href="http://ca.linkedin.com/pub/kevin-choy/93/a52/784/"><img class="footer-icon" src="<?php echo url('assets/images/icon-linkedin.png') ?>" alt="Email icon" height="20" />LinkedIn</a></li>
                            <li><a class="button-nav button-footer-nav" href="https://github.com/kgchoy"><img class="footer-icon" src="<?php echo url('assets/images/icon-github.png') ?>" alt="GitHub icon" height="20" />GitHub</a></li>
                        </ul>
                    </div> <!-- ./footerBarRight -->
                </div> <!-- ./navBar -->
            </div>
        </footer>


</body>
</html>