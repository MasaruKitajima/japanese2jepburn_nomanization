<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="assets/fontawerome/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="cntainer">
      <form>
        <div class="md-8">
          <label for="JapaneseTextStringToConvert" class="form-label">Japanese Text String</label>
          <input class="form-control" id="JapaneseTextStringToConvert" type="text" placeholder="Enter Japanese" aria-label="JapaneseTextStringToConvert">
        </div>
        <div class="md-8">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>
    </div>
    <!-- jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- Custom scripts -->
    <script src="js/kuroshiro.min.js"></script>
    <script src="js/kuroshiro-analyzer-kuromoji.min.js"></script>
    <script src="js/kuroshiro-analyzer-kuromoji.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            <script type="text/javascript">
      $(function() {
        // 仮名漢字変換・ローマ字変換の為のライブラリのコアインスタンス化
        var kuroshiro = new Kuroshiro();
        kuroshiro.init(new KuromojiAnalyzer({ dictPath: "url/to/dictFiles" }))
        .then(function () {
          return kuroshiro.convert("感じ取れたら手を繋ごう、重なるのは人生のライン and レミリア最高！", { to: "hiragana" });
          })
        .then(function(result){
        console.log(result);
    })
      });
    </script>
  </body>
</html>
