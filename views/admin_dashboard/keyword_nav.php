<link rel="stylesheet" href="../public/css/admin_dashboard/sub_nav.css">

<div class="navbar">
    <a href="?page=keyword&action=add" class="<?= $keywordAction == 'add' ? 'active' : '' ?>">Add Keyword</a>
    <a href="?page=keyword&action=view" class="<?= $keywordAction == 'view' ? 'active' : '' ?>">View Keywords</a>
    <a href="?page=keyword&action=delete" class="<?= $keywordAction == 'delete' ? 'active' : '' ?>">Delete Keyword</a>
</div>