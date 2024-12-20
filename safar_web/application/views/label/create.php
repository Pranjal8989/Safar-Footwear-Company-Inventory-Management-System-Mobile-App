<!-- dashboard inner -->
<div class="col-md-12" style="padding:20px;">
  <div class="white_shd full margin_bottom_30">
    <div class="full graph_head">
      <div class="col-lg-12 my-2">
        <h1 class="text-center mb-3">Label</h1>
      </div>
      <div class="d-flex justify-content-end ">
        <a class="btn btn-warning btn-lg" href="<?php echo base_url('label'); ?>"> <i class="fas fa-angle-left"></i>
          Back</a>
      </div>
    </div>
    <div class="padding_infor_info">


      <div class="form-group" style="font-weight:bold;">
        <label for="">Quality</label>
        <div>
          <label for="quality_first" style="margin-right:10px">First</label>
          <input type="radio" name="quality" id="quality_first" value="first" checked
            onchange="change_quality(this.value);">

          <label for="quality_second" style="margin-left:20px;margin-right:10px">Second</label>
          <input type="radio" name="quality" id="quality_second" value="second" onchange="change_quality(this.value);">
        </div>
      </div>
      <div id='a'>
        <form method="post" action="<?php echo base_url('label/store'); ?>">
          <div class="form-group">
            <input type="hidden" name="quality" id="quality_first" value="first">
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="">Label Type</label>
              <div>
                <label for="label_type_inner" style="margin-right:10px">Inner Label</label>
                <input type="radio" name="label_type" id="label_type_inner" value="inner">

                <label for="label_type_outer" style="margin-left:20px;margin-right:10px">Outer Label</label>
                <input type="radio" name="label_type" id="label_type_outer" value="outer" checked>
              </div>
            </div>
            <div class="form-group">
              <label>Article</label>

              <select name="article" id="article"
                style="padding:10px 10px;display:block;width:100%;border-radius:10px;color:black;"
                onchange="get_size_by_articleId();get_color_by_articleId();get_no_of_pairs_by_articleId();">
                <option>Select Article</option>
                <?php foreach ($article as $a) { ?>
                  <option value="<?= $a->id . "~" . $a->name ?>"><?php foreach($category as $cat){ 
                    if($cat->id == $a->category){
                      echo $a->name."(".$cat->name.")";
                      }   } ?></option>
                <?php } ?>
              </select>

            </div>
            <div class="form-group first">
              <label>Size</label>
              <select name="size" id="size"
                style="padding:10px 10px;display:block;width:100%;border-radius:10px;color:black;"></select>
            </div>

            <div class="form-group first">
              <label>Color</label>
              <select name="color" id="color"
                style="padding:10px 10px;width:100%;border-radius:10px;color:black;"></select>
            </div>

            <div class="form-group first">
              <label>Number of Pairs</label>
              <select name="no_of_pairs" id="no_of_pairs"
                style="padding:10px 10px;width:100%;border-radius:10px;color:black;">
                <option value="30">30</option>
                <option value="48">48</option>
                <option value="60">60</option>
                <option value="96">96</option>
                <option value="108">108</option>
                <option value="120">120</option>
                <option value="140">140</option>
                 <option value="144">144</option>
                <option value="180">180</option>
              </select>
            </div>

            <div class="form-group">
              <label>Number of Boxes</label>
              <input type="number" name="no_of_boxes"
                style="padding:10px 10px;display:block;width:100%;border-radius:10px;color:black; border:1px solid grey;"
                required>
            </div>
          </div>

        </form>
      </div>
      <div id="b" class="second">
        <form method="post" action="<?php echo base_url('label/store'); ?>">
          <div class="form-group">
            <div>
              <input type="hidden" name="quality" id="quality_second" value="second"
                onchange="change_quality(this.value);">
            </div>
          </div>
          <div class="form-group">
            <div class="form-group ">
              <label for="">Label Type</label>
              <div>
                <label for="label_type_inner" style="margin-right:10px">Inner Label</label>
                <input type="radio" name="label_type" id="label_type_inner_second" value="inner">

                <label for="label_type_outer_second" style="margin-left:20px;margin-right:10px">Outer
                  Label</label>
                <input type="radio" name="label_type" id="label_type_outer_second" value="outer" checked>
              </div>
            </div>
            <div class="form-group">
              <label>Article</label>
              <select name="article" id="article_b"
                style="padding:10px 10px;display:block;width:100%;border-radius:10px;color:black;"
                onchange="get_size_by_b_articleId();get_color_by_b_articleId();">
                <option>Select Article</option>
                <?php foreach ($article as $a) { ?>
                  <option value="<?= $a->id . "~" . $a->name ?>"><?php foreach($category as $cat){ 
                    if($cat->id == $a->category){
                      echo $a->name."(".$cat->name.")";
                      }   } ?> </option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group first">
              <label>Size</label>
              <select name="size" id="size_b"
                style="padding:10px 10px;display:block;width:100%;border-radius:10px;color:black;"></select>
            </div>

            <div class="form-group ">
              <label>Color</label>
              <select name="color" id="color_b"
                style="padding:10px 10px;width:100%;border-radius:10px;color:black;"></select>
            </div>
            <div class="form-group first">
              <label>Number of Pairs</label>
              <select name="no_of_pairs" id="no_of_pairs"
                style="padding:10px 10px;width:100%;border-radius:10px;color:black;">
                <option value="30">30</option>
                <option value="48">48</option>
                <option value="60">60</option>
                <option value="96">96</option>
                <option value="108">108</option>
                <option value="120">120</option>
                <option value="140">140</option>
                <option value="180">180</option>
              </select>
            </div>
            <div class="form-group">
              <label>Number of Boxes</label>
              <input type="number" name="no_of_boxes"
                style="padding:10px 10px;display:block;width:100%;border-radius:10px;color:black; border:1px solid grey;"
                required>
            </div>
          </div>
        </form>
      </div>
      <div class="form-group text-right" style="margin-top:20px;">
        <button type="button" class="btn btn-lg btn-success" onclick="submitForm()"> <i class="fas fa-check"></i> Submit
        </button>
      </div>
    </div>
  </div>
</div>

<!-- end dashboard inner -->