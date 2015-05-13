<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sentence Extractor</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="text"/>
        <input type="text" name="word"/>
        <input type="submit" value="Extract"/>
    </form>
</body>
</html>
<?php
if(isset($_GET['text'], $_GET['word'])){
    $word = $_GET['word'];
    $pattern = '/[^.!?]+[.!?]*/';
    $text = $_GET['text'];
    preg_match_all($pattern, $text, $sentence);
    $search = "/[^\w]" . $word . "[^\w]/";
    foreach($sentence[0] as $value){
        $value = trim($value);
        if(preg_match($search, $value)){
            echo "$value <br/>\n";
        }
    }
}
?>
