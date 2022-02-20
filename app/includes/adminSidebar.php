<div class="left-sidebar">
    <ul>
       
    <?php if($_SESSION['userType'] == 1): ?>
        <li><a href="<?php echo BASE_URL . '/admin/users/index.php'; ?>">Manage Users</a></li>
        <li><a href="<?php echo BASE_URL . '/admin/posts/index.php'; ?>">Manage Posts</a></li>
        <li><a href="<?php echo BASE_URL . '/admin/topics/index.php'; ?>">Manage Topics</a></li>
        <li><a href="<?php echo BASE_URL . '/admin/informations/index.php'; ?>">Manage Informations</a></li>
        <?php endif; ?>
        <?php if($_SESSION['userType'] == 2): ?>
        <li><a href="<?php echo BASE_URL . '/admin/clubs/index.php'; ?>">Manage Clubs</a></li>
        <!-- <li><a href="<?php echo BASE_URL . '/admin/club/index.php'; ?>">Manage Club</a></li> -->
        <li><a href="<?php echo BASE_URL . '/admin/fixture/index.php'; ?>">Manage Fixtures</a></li>
        <li><a href="<?php echo BASE_URL . '/admin/ticket/index.php'; ?>">Manage Tickets</a></li>
          <li><a href="<?php echo BASE_URL . '/admin/payment/index.php'; ?>">Manage Transactions</a></li>
        <?php endif; ?>
        <?php if($_SESSION['userType'] == 3): ?>
        <li><a href="<?php echo BASE_URL . '/admin/ads/index.php'; ?>">Manage Ads</a></li>
          
        <?php endif; ?>

        <?php if($_SESSION['userType'] == 4): ?>      
        <li><a href="<?php echo BASE_URL . '/admin/reports/index.php'; ?>">Manage Reports</a></li>            
        <li><a href="<?php echo BASE_URL . '/admin/qrcode/index.php'; ?>">Manage QR Codes</a></li>
        <?php endif; ?>
    </ul>
</div>