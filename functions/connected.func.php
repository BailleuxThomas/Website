<?php

if (isset($_SESSION['membre'])) {
}else{
    echo('<script language="javascript">document.location="index.php?page=dashboard"</script>');
    exit;
}
?>