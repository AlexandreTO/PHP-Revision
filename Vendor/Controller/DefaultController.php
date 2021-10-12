<?php 

namespace Vendor\Controller;

class DefaultController {

    public function render(string $path, array $param = [])
    {
        ob_start();
        extract($param);
        require ROOT."/templates/$path.php";
        $content = ob_get_clean();
        require ROOT."/templates/default.php";
    }

    public function redirectToRoute(string $path)
    {
        header("Location:index.php?page=$path");
    }
}