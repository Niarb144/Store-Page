<style>
    @import url("https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@300&family=Rubik:wght@400;500;700&display=swap");
    
    :root {
      --light: #ffffff;
      --main: #e24abc;
      --dark: #000;
    }
    body {
      font-family: "Rubik", sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .footer h3 {
      font-family: "Noto Serif Display", serif;
      font-size: 2.3rem;
      font-weight: 300;
      text-align: left;
    }
    .footer a {
      text-decoration: none;
      color: var(--dark);
      font-weight: 400;
      transition: 0.3s ease-in;
      border-bottom: 1px solid transparent;
      margin-bottom: 0.5rem;
      display: inline-flex;
    }
    .footer a:hover {
      border-bottom: 1px solid var(--main);
    }
    .footer button:hover{
    transform: scale(1.2);
    transition: all ease .4s;
    cursor: pointer;
    }
    .footer ul {
      list-style-type: none;
      padding: 0;
    }
    .footer button {
      appearance: none;
      border: 0;
      background: transparent;
    }
    .footer .flex {
      display: flex;
    }
    .footer_video {
      position: absolute;
      top: 0;
      left: 0;
      object-fit: cover;
      width: 100%;
      height: 100%;
      z-index: -1;
      overflow: hidden;
      border: none;
    }
    .footer_inner {
      background: var(--light);
      backdrop-filter: blur(50px);
      border: 0.1px solid rgba(233, 232, 232, 0.208);
      border-radius: 5px;
      padding: 2rem;
      margin: 1rem 0;
    }
    .footer {
      position: relative;
      display: flex;
      align-items: center;
      min-height: 100vh;
    }
    .footer .footer-container {
      max-width: 100%;
      width: 100%;
      margin: 0 auto;
      padding: 0 1rem;
    }
    
    .footer form {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: min(100%, 400px);
      border-bottom: 1px solid var(--dark);
    }
    
    .footer input {
      padding: 0.75rem 0;
      border: none;
      background: none;
      font-weight: 500;
      transition: border 0.3s cubic-bezier(0.215, 0.61, 0.355, 1);
      border-radius: 0;
      width: 100%;
      font-size: 1.05rem;
      font-weight: bolder;
    }
    .footer input:focus {
      outline: none;
    }
    .footer input::placeholder {
      color: var(--dark);
    }
    .links{
        
    }
    #myBtn {
        display: none; /* Hidden by default */
        position: fixed; /* Fixed/sticky position */
        bottom: 20px; /* Place the button at the bottom of the page */
        right: 30px; /* Place the button 30px from the right */
        z-index: 99; /* Make sure it does not overlap */
        border: none; /* Remove borders */
        outline: none; /* Remove outline */
        background-color: red; /* Set a background color */
        color: white; /* Text color */
        cursor: pointer; /* Add a mouse pointer on hover */
        padding: 4px; /* Some padding */
        border-radius: 10px; /* Rounded corners */
        font-size: 24px; /* Increase font size */
        }
              
    #myBtn:hover {
        background-color: #f734d7; /* Add a pink background on hover */
    }
    @media (min-width: 675px) {
      .footer .layout {
        display: flex;
        flex-wrap: nowrap;
        column-gap: 2rem;
      }
      .footer .w-50 {
        width: 50%;
      }
      .footer .w-25 {
        width: 25%;
      }
    }
    .footer form {
      position: relative;
    }
    .footer svg {
      margin: 0.5rem;
    }
    .c-2 {
      margin-top: 3.5rem;
    }
    .footer_copyright {
      color: var(--light);
    }
    @media screen and(max-width: 675px){
    #myBtn {
                display: none; /* Hidden by default */
                position: fixed; /* Fixed/sticky position */
                bottom: 20px; /* Place the button at the bottom of the page */
                right: 0; /* Place the button 30px from the right */
           
       }
    }
    </style>
    <footer class="footer">
            <video class="footer_video" id="footer_video" muted="" loop="" autoplay src="https://theimaara.co.ke/assets/Videos/colours2.mp4" type="video/mp4">
            </video>
          
            <div class="footer-container">
              <div class="footer_inner">
                <div class="c-footer">
                  <div class="layout">
                    <div class="layout_item w-50">
                      <div class="newsletter">
                        <h3 class="newsletter_title">Subscribe to our Newsletter to never miss out</h3>
                        <form id="myform" method="POST" action="https://script.google.com/macros/s/AKfycbwDbxgn2eaqldDs2Hqs6ef0fta9Ph_8jZNY4TjlbsEcj1A7jmakPbfT6DTnsfKRur3h/exec">
                          <input type="email" id="email" name="Email" placeholder="Email Address">
                          <button type="submit" value="Submit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
                            </svg>
                          </button>
                        </form>
                      </div>
                    </div>
          
                    <div class="layout_item w-25 links">
                      <nav class="c-nav-tool">
                        <h4 class="c-nav-tool_title">Useful Links</h4>
                        <ul class="c-nav-tool_list">
                          <li>
                            <a href="#" class="c-link">About Us</a>
                          </li>
          
                          <li>
                            <a href="https://theimaara.co.ke/gallery" class="c-link">Gallery</a>
                          </li>
          
                          <li>
                            <a href="https://theimaara.co.ke/events" class="c-link">Events</a>
                          </li>
                          <li>
                            <a href="https://theimaara.co.ke/offers" class="c-link">Offers</a>
                          </li>
                          <li>
                            <a href="#" class="c-link">Tenants</a>
                          </li>
                        </ul>
                      </nav>
          
                    </div>
          
                    <div class="layout_item w-25">
                      <nav class="c-nav-tool">
                        <h4 class="c-nav-tool_title">Contacts</h4>
                        <ul class="c-nav-tool_list">
          
                          <li class="c-nav-tool_item">
                            <p><span>Mobile:</span> 0714 800 800</p>
                          </li>
          
                          <li class="c-nav-tool_item">
                            <P><span>Email:</span> marketing@theimaara.co.ke</P>
                          </li>
          
                          <li class="c-nav-tool_item">
                            <p><span>P.O. BOX</span> 10757-00200</p>
                          </li>
                        </ul>
                      </nav>
          
                    </div>
    
                    <div class="layout_item w-25">
                        <h4 class="c-nav-tool_title">Location</h4>
                        <p>Imaara Daima, Off Mombasa Road, Nairobi, Kenya</p>
                        <div style="width: 100%">
                            <iframe width="100%" height="300" frameborder="0" scrolling="no"
                             marginheight="0" marginwidth="0" 
                             src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=The%20Imaara%20Mall,Imaara%20Daima,%20Nairobi,%20Kenya+(The%20Imaara%20Mall)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Population calculator map</a>
                            </iframe>
                        </div>
                    </div>
                  </div>
                  <div class="layout c-2">
                    
                    <div class="layout_item w-25">
                      <ul class="flex">
                        <li>
    <!--facebook-->
                          <a href="https://www.facebook.com/theimaaramall/" target="blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z" />
                            </svg>
                          </a>
                        </li>
                        <li>
    <!--twitter-->
                          <a href="https://twitter.com/theimaaramall?lang=en" target="blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z" />
                            </svg>
                          </a>
                        </li>
                        <li>
    <!--Instagram-->
                          <a href="https://www.instagram.com/theimaaramall/" target="blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z" />
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="layout_item w-25" style="display:flex;justify-content: end;align-items: center;">
                  
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer_copyright">
                <p>&copy; 2023 The Imaara Mall.</p>
              </div>
            </div>
          </footer>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" color="white">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm1 10h3l-4-4-4 4h3v4h2v-4z" />
                              </svg>
                        </button>
        
    
      <script>
            // Get the button:
            let mybutton = document.getElementById("myBtn");
    
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};
    
            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }
    
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
              document.body.scrollTop = 0; // For Safari
              document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            }
          </script>
    <script>
    window.addEventListener("load", function(){
        const form = document.getElementById("myform");
        form.addEventListener("submit",function(e) {
            e.preventDefault();
            const data = new FormData(form);
            const action = e.target.action;
            fetch(action, {
                method: "POST",
                body: data,
            })
            .then(() => {
                alert("You have successfully subscribed to Imaara Newsletter");
            })
        })
    })
    </script>