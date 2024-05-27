<?php

function test0(){
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $isGoogleBot = stripos($user_agent, 'mozi') > -1;
    var_dump($isGoogleBot);
}

function test1(){
    $str = '{\"title_text\":"H.A","title_color":"#f3e7d7","outer_color":"#74c3fc","inner_color":"#000000"}';
    $str = str_replace('\\"','"', $str);
    $json = isJson($str);
    var_dump($json);
}

function test2(){
    extract(sanitize_array_assoc($_REQUEST));
    if(isset($tags)){
        $tags = is_array($tags)?$tags:array();
        dd($tags);
    }
    ?>
    <form action="" method="post">
        <input type="checkbox" name="tags[]" value="AWS"> AWS <br>
        <input type="checkbox" name="tags[]" value="Linux"> Linux <br>
        <input type="checkbox" name="tags[]" value="WEB"> WEB <br>
        <input type="submit" value="test">
    </form>
    <?php
}

function test3(){
    @extract(sanitize_array_assoc($a = array('test'=>'##hkjhkjhghffjk **kmkm **kl **k // #')));
    dd($test);

}

function upload(){
    if($_SERVER['REQUEST_METHOD'] == "POST"):
        $res = upload_files('file', ASSETS_DIR);
        var_dump($res);
        var_dump($_POST);
    endif;
}

function test4(){
?>
<input id="file-input" type="file" multiple data-id="test">
<progress id="progressBar" value="0" max="100"></progress>
<script>
const fileInput = document.getElementById('file-input');
const progressBar = document.getElementById("progressBar");
const formation_id = fileInput.getAttribute('data-id');

fileInput.addEventListener('change', () => {
  const files = fileInput.files;
  const formData = new FormData();

  for (let i = 0; i < files.length; i++) {
    formData.append("file[]", files[i]);
  }
  formData.append("formation_id", formation_id);
  
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "test/upload", true);

  xhr.upload.onprogress = function(e) {
    const percent = (e.loaded / e.total) * 100;
    progressBar.value = percent;
  };

  xhr.onload = function() {
    if (this.status === 200) {
      console.log("Files uploaded successfully");
    } else {
      console.error("Error uploading files");
    }
  };

  xhr.send(formData);
});


</script>
<?php
}

function test5(){
  if($_SERVER['REQUEST_METHOD'] == "POST"){
        dd($_REQUEST);
  }
    ?>

    <form action="" method="post">
        <input type="submit" value="test">
        <input type="text" name="testv" value="test123">
    </form>
<?php
}
function test6(){
  ?>
  <style>
    #editor-container {
  width: 500px;
  height: 300px;
  border: 1px solid gray;
  position: relative;
}

#toolbar {
  position: absolute;
  top: 0;
  left: 0;
  background-color: white;
  padding: 10px;
}

#editor {
  width: 100%;
  height: calc(100% - 40px);
  margin-top: 40px;
}

  </style>
<div id="editor-container">
  <div id="toolbar">
    <select id="headings">
      <option value="">Normal</option>
      <option value="p">Paragraph</option>
      <option value="h1">Heading 1</option>
      <option value="h2">Heading 2</option>
      <option value="h3">Heading 3</option>
      <option value="h4">Heading 4</option>
      <option value="h5">Heading 5</option>
      <option value="h6">Heading 6</option>
      <!-- Add other headings as needed -->
    </select>
    <button id="bold">Bold</button>
    <button id="italic">Italic</button>
    <button id="ul">UL</button>
    <button id="ol">OL</button>
    <select id="font-size">
      <option value="">Default</option>
      <option value="1">10px</option>
      <option value="2">12px</option>
      <option value="3">14px</option>
      <!-- Add other font sizes as needed -->
    </select>
    <input type="color" id="font-color">
    <!-- Add other buttons as needed -->
  </div>
  <div id="editor" contentEditable="true">
    <p>Start typing here...</p>
  </div>
</div>

<script>
  document.querySelector("#bold").addEventListener("click", function() {
  document.execCommand("bold", false, null);
});

document.querySelector("#italic").addEventListener("click", function() {
  document.execCommand("italic", false, null);
});

document.querySelector("#heading").addEventListener("click", function() {
  document.execCommand("formatBlock", false, "h3");
});

</script>

<?php
}

function test(){
  $str = 'Test
  hello
  yes baby';
  $str = trim(json_encode($str), '"');
  $json = '[{"name":"'.$str.'"}]';
  // dd($json);
  $json = json_decode($json, true);
  dd($json);
}