<div class="chatbot cardy">
      <header>
        <h2>KES ltd(Chatbot)</h2>
        <p>You are chatting with KES ltd. Type <b>"Go"</b>.</p>
        <span class="close-btn material-symbols-outlined">close</span>
      </header>
      
      <div class="chatbox" style="overflow: scroll">
        <div id="message-section">
          <!--<span class="material-symbols-outlined">smart_toy</span>-->
          <!--<div id="bot"><span id="bot-response">Hello...</span></div>-->
          <b><u>Click on category to ask:</u></b><br>
          <table style="max-height: 100px!important; overflow-y: auto;">
            <tr>
              <td style='width:150px!important;'>
              <?php 
              echo "<ol style='list-style: none;'>";
            include_once('./database/connect.php');
            $sql50 = 'SELECT DISTINCT category FROM chat_question ORDER BY category ASC LIMIT 6'; 
            $query50 = mysqli_query($con, $sql50); 
            while($row50 = mysqli_fetch_array($query50)){ 
              $link1 = "#";
              echo "<li style='text-align: left'><a href='".$link1."' id='link40' style='color: blue' onclick='showStuff1()'>".$row50['category'].
              "</a></li>";
              
              echo "<ol id='ol1' style='display: none;'>";
              $sql70 = "SELECT * FROM chat_question WHERE category='$row50[category]'";
              $query70 = mysqli_query($con, $sql70); 
              while($row70 = mysqli_fetch_array($query70)){ 
                echo "<li><a href='#' style='font-size: 10px; onClick=\"autoFill('$row70[question_text]'); return false;\" role='button'>".$row70['question_text']."</a></li>";
              }
              
              echo "</ol>";

              }
              echo "</ul>";
            ?>
              </td>
              <td style='width:150px!important;'>
              <?php 
              echo "<ul style='list-style: none;'>";
            include_once('./database/connect.php');
            $sql50 = 'SELECT DISTINCT category FROM chat_question ORDER BY category DESC LIMIT 6'; 
            $query50 = mysqli_query($con, $sql50); 
            while($row50 = mysqli_fetch_array($query50)){ 

              $link1 = "#";
              echo "<li style='text-align: left'><a href='".$link1."' id='link40' style='color: blue' onclick='showStuff2()'>".$row50['category']."</a></li>";
              
              echo "<ol id='ol2' style='display: none;'>";
              $sql40 = "SELECT * FROM chat_question WHERE category='$row50[category]'";
              $query40 = mysqli_query($con, $sql40); 
              while($row40 = mysqli_fetch_array($query40)){ 
                echo "<li><a href='#' style='font-size: 10px;' id='olsh1' onClick=\"autoFill('$row40[question_text]'); return false;\" role='button'>".$row40['question_text']."</a></li>";
              }
              echo "</ol>";

              }
              echo "</ul>";
            ?>
              </td>
            </tr>
          </table>

          <script>
            
          function showStuff1() {
            //document.getElementById('ol1').style.display='block';
            const addCSS = css => document.head.appendChild(document.createElement("style")).innerHTML=css;addCSS("ol{ display : block!important; }")
          }

          function showStuff2() {
            //document.getElementById('ol2').style.display='block';
            const addCSS = css => document.head.appendChild(document.createElement("style")).innerHTML=css;addCSS("ol{ display : block!important; }")
          }

          function autoFill(vorspeise) {
            $('.vorspeise').val(vorspeise);
          }
          </script>

        </div>

        <div class="chat-input">
          <textarea placeholder="Message me..." spellcheck="true" id="input" name="vorspeise-traditionell-montag" class="form-control vorspeise" required></textarea>
          <span id="send-btn" class="material-symbols-rounded">send</span>
        </div>
      </div>

      </div>

      <!--
      <div class="chat-input" id="input-section">
      <textarea placeholder="Message me..." spellcheck="true" id="input" autofocus="autofocus"></textarea>
      <button class="send" id="send-btn" onclick="sendMessage()">
        <div class="circle"><i class="zmdi zmdi-mail-send"></i></div>
      </button>
    </div>-->
      
  
        <!-- Footer bottom -->
            <div class="footer_bottom text-center">
                <p class="wow fadeInRight">
                    Copyright &copy <?php echo date('Y'); ?>. 
                    All Rights Reserved
                </p>
            </div><!-- Footer bottom end -->
        </footer><!-- Footer end -->

        <!-- JavaScript -->
        <script src="js/chatbot-big.js"></script>
        <script src="js/chatbot-rules.js"></script>
        <script src="js/jquery-1.12.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Bootsnav js -->
        <script src="js/bootsnav.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="js/isotope.js"></script>
        <script src="js/isotope-active.js"></script>
        <script src="js/jquery.fancybox.js?v=2.1.5"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/main.js"></script>
    </body>	
</html>	