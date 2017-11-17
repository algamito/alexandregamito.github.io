<?php require '../config/ini.php'; ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Props</title>
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/css/foundation.css" />
    <script src="../style/js/vendor/modernizr.js"></script>
    
  </head>
  <body>
    <?php require_once '../get_pages/index_get.php'; ?>
    <div class="off-canvas-wrap docs-wrap" data-offcanvas="">
      <div class="inner-wrap">
        <nav class="tab-bar">
          <section class="left-small">
            <a class="left-off-canvas-toggle menu-icon"><span></span></a>
          </section>

          <section class="right tab-bar-section">
            <h1 class="title">Proposal</h1>
            <?=$pl?>
          </section>

        </nav>

        <aside class="left-off-canvas-menu">
          <ul class="off-canvas-list">
            <li><label>Proposals</label></li>
            <li><a href="#">Home</a></li>
            <li><label>Test</label></li>
            <li><a href="#">BD</a></li>
          </ul>
        </aside>

        <section class="main-section">
          <div class="row">
            <div class="large-8 columns">
              <br>
              <h4>Select Proposal</h4>
              <span class="label">Open / Closed</span>
              <div class="switch radius">
                <input id="exampleCheckboxSwitch" type="checkbox" name="testGroup">
                <label for="exampleCheckboxSwitch"></label>
              </div> 
             
              <select id="customDropdown1" class="medium" required="" aria-invalid="true" data-invalid="">
                <option value=""></option>
                <option value="first">Green Chilies</option>
                <option value="second">Raisins</option>
                <option value="third">Panko bread crumbs</option>
                <option value="fourth">Assistance</option>
              </select>
            </div>
    
            <div class="large-4 columns">
              <br>
              <h4>Create New Proposal</h4>
              <button class="button" data-reveal-id="new_prop">New</button>

              <div id="new_prop" class="reveal-modal" data-reveal>
                <h5>Select a year</h5>
                <form>
                  <div class="row">
                     <div class="large-6 columns">
                       <div class="row collapse prefix-radius">
                         <div class="small-3 columns">
                           <span class="prefix">Year</span>
                         </div>
                         <div class="small-7 columns">
                           <input type="number" placeholder="Value" class="new_prop_year">
                         </div>
                         <div class="small-2 columns">
                            <a href="#" class="button postfix new_prop_submit">Go</a>
                          </div>
                       </div>
                     </div>
                    </div>
                </form>

                <a class="close-reveal-modal">&#215;</a>
              </div>
            </div>
          </div>
        </section>
      <!-- <a class="exit-off-canvas"></a> -->
      </div>
    </div>

    
    
    <script src="../style/js/vendor/jquery.js"></script>
    <script src="../style/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="../style/script.js"></script>
    <script src="../style/js-index.js"></script>
  </body>
</html>