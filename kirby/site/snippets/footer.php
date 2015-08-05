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
                            <li><a class="button-nav button-footer-nav" href="assets/doc/resume.pdf"><span class="oi icon" data-glyph="document" title="resume" aria-hidden="true">Resume</span></a></li>
                            <li><a class="button-nav button-footer-nav" href="">Email</a></li>
                            <li><a class="button-nav button-footer-nav" href="">LinkedIn</a></li>
                            <li><a class="button-nav button-footer-nav" href="">GitHub</a></li>
                        </ul>
                    </div> <!-- ./footerBarRight -->
                </div> <!-- ./navBar -->
            </div>
        </footer>


</body>
</html>