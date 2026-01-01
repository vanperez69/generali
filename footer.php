<?php
$config = require 'f_config.php';
?>
    <!-- Footer -->
    <footer class="bg-gray-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Links Section -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                <a href="#" class="text-sm hover:text-red-500">Contact</a>
                <a href="#" class="text-sm hover:text-red-500">Imprint</a>
                <a href="#" class="text-sm hover:text-red-500">Terms of Use</a>
                <a href="#" class="text-sm hover:text-red-500">Data protection</a>
            </div>

            <!-- Copyright -->
            <div class="text-center mt-8 pt-8 border-t border-gray-600 text-sm">
                <p>&copy; <?php echo $config['siteName']; ?> AG | Telephone: <a href="tel:<?php echo str_replace(' ', '', $config['phone']); ?>" class="hover:text-red-500"><?php echo $config['phone']; ?></a> | Email: <a href="mailto:<?php echo $config['email']; ?>" class="hover:text-red-500"><?php echo $config['email']; ?></a></p>
            </div>
        </div>
    </footer>
<!-- Begin of Chaport Live Chat code -->
<script type="text/javascript">
(function(w,d,v3){
w.chaportConfig = {
  appId : '6956f96f43e61b3694e0caa1',
};

if(w.chaport)return;v3=w.chaport={};v3._q=[];v3._l={};v3.q=function(){v3._q.push(arguments)};v3.on=function(e,fn){if(!v3._l[e])v3._l[e]=[];v3._l[e].push(fn)};var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://app.chaport.com/javascripts/insert.js';var ss=d.getElementsByTagName('script')[0];ss.parentNode.insertBefore(s,ss)})(window, document);
</script>
<!-- End of Chaport Live Chat code -->
</body>
</html>
