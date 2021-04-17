<form action="result.php" method="post">
 お名前：<input type="text" name="my_name"><br>
 ご希望商品：<input type="radio" name="syouhin" value="A賞">A賞
          <input type="radio" name="syouhin" value="B賞">B賞
          <input type="radio" name="syouhin" value="C賞">C賞<br>
         個数：<select name="number">
            <?php for ($i=1;$i<=10;$i++){ ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>
            </option>
            <?php } ?>
            </select><br>
     <input type="submit" value="申込">
</form>

<!-- 
モジュール→部品のこと

バージョン管理システム→ファイルに対して「誰が」「いつ」「何を変更したか」というような情報を記録することで、
過去のある時点の状態を復元したり変更内容の差分を表示できるようにするシステムのこと

サブクエリ→SQL文の結果を使ったSQL文 -->