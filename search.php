<?php
//get请求
if (isset($_GET['query'])) {
    $query = htmlspecialchars($_GET['query']);
    echo "<h2>搜索结果:</h2>";
    echo "<p>你搜索的标题是: " . $query . "</p>";
    // 在此处添加进一步的处理，例如查询数据库等
} else {
    echo "<h2>搜索结果:</h2>";
    echo "<p>请输入搜索标题。</p>";
}
?>
<style>
  h2{
    color: red;
  }
</style>