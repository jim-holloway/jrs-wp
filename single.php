<?php
if (in_category('grantee-news')) {include (TEMPLATEPATH . '/single-blog.php');
}
elseif (in_category('jrs-news')) {include (TEMPLATEPATH . '/single-blog.php');
}
elseif (in_category('jrs-blog')) {include (TEMPLATEPATH . '/single-blog.php');
}
else { include (TEMPLATEPATH . '/single-grant.php');
}
?>