<footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="{{ route('index') }}">
                  Industrial
                </a>
              </li>
              <li>
                <a href="{{ route('about') }}">
                  About Us
                </a>
              </li>
              <li>
                <a href="{{ route('blogs') }}">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            ©
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>