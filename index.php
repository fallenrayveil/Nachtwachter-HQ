<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nachtwachter HQ</title>

    <!-- My Own Styles -->
    <link rel="stylesheet" href="assets/style/style.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- add icon link -->
    <link rel = "icon" href = 
    "https://storage.googleapis.com/imgbkt-ray/icon.png" 
            type = "image/x-icon" >

  </head>

  <body>
    <script>
      function myFunction1() {
        // Get the text field
        var copyText = document.getElementById("myInput1");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Copied the text: " + copyText.value);
      }
      function myFunction2() {
        // Get the text field
        var copyText = document.getElementById("myInput2");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Copied the text: " + copyText.value);
      }
      function myFunction3() {
        // Get the text field
        var copyText = document.getElementById("myInput3");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Copied the text: " + copyText.value);
      }
      function myFunction4() {
        // Get the text field
        var copyText = document.getElementById("myInput4");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Copied the text: " + copyText.value);
      }
      function myFunction5() {
        // Get the text field
        var copyText = document.getElementById("myInput5");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Copied the text: " + copyText.value);
      }
      function myFunction6() {
        // Get the text field
        var copyText = document.getElementById("myInput6");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Copied the text: " + copyText.value);
      }
    </script>
    <header>
      <div class="jumbotron">
        <h1>Nachtwachter HQ</h1>
        <p align="center">
          <bold
            >Hi there fellas! <br />
            俺の個人的なウェブサイトへようこそ<br />
            Here are all my UID's in every Hoyoverse game. So add me as a friend
            if you want</bold
          >
        </p>
      </div>

      <nav>
        <ul>
          <li>
            <a href="#honkai">Honkai Impact 3rd</a>
          </li>
          <li>
            <a href="#genshin">Genshin Impact</a>
          </li>
          <li>
            <a href="#starrail">Honkai Star Rail</a>
          </li>
        </ul>
      </nav>
    </header>

    <main>
      <!-- Konten artikel -->
      <div id="content">
        <article id="honkai" class="card">
          <h2>Honkai Impact 3rd</h2>
          <img
            src="https://storage.googleapis.com/imgbkt-ray/honkai.png"
            alt="Honkai"
            class="featured-image"
          />
          <p align="justify">
            This one is my main Honkai Impact 3rd account. You can copy my UID
            here :
            <!-- The text field -->
            <input
              type="text"
              style="font-size: 16pt"
              value="10806827"
              id="myInput1"
              readonly
            />

            <!-- The button used to copy the text -->
            <button onclick="myFunction1()">Copy UID</button>
          </p>
        </article>

        <article id="genshin" class="card">
          <h2>Genshin Impact</h2>
          <p align="justify">
            Well, for genshin impact accounts I have several, including the
            following below.
          </p>
          <section>
            <h3>Main Account ( Asia )</h3>
            <img
              src="https://storage.googleapis.com/imgbkt-ray/genshin.png"
              alt="Main Account"
              class="featured-image"
            />
            <p align="justify">
              This one is my main Genshin Impact account. You can copy my UID
              here :
              <!-- The text field -->
              <input
                type="text"
                style="font-size: 16pt"
                value="800387325"
                id="myInput2"
                readonly
              />

              <!-- The button used to copy the text -->
              <button onclick="myFunction2()">Copy UID</button>
            </p>
          </section>
          <br />
          <br />
          <section>
            <h3>Main Account ( Europe )</h3>
            <img
              src="https://storage.googleapis.com/imgbkt-ray/genshin3.png"
              alt="Main Account"
              class="featured-image"
            />
            <p align="justify">
              This one is another my main Genshin Impact account. You can copy
              my UID here :
              <!-- The text field -->
              <input
                type="text"
                style="font-size: 16pt"
                value="763248003"
                id="myInput4"
                readonly
              />

              <!-- The button used to copy the text -->
              <button onclick="myFunction4()">Copy UID</button>
            </p>
          </section>
        </article>

        <article id="starrail" class="card">
          <h2>Honkai Star Rail</h2>
          <p align="justify">
            Similar to Genshin, I also have several accounts on Honkai Star
            Rail, you can check them out below.
          </p>

          <section>
            <h3>Main Account</h3>
            <img
              src="https://storage.googleapis.com/imgbkt-ray/hsr.png"
              alt="Main Account"
              class="featured-image"
            />
            <p align="justify">
              This one is my main Honkai Star Rail account. You can copy my UID
              here :
              <!-- The text field -->
              <input
                type="text"
                style="font-size: 16pt"
                value="801117091"
                id="myInput5"
                readonly
              />

              <!-- The button used to copy the text -->
              <button onclick="myFunction5()">Copy UID</button>
            </p>
          </section>
          <br />
          <br />
        </article>
        <article id="contact" class="card">
          <h2>Wanna talk to me?</h2>
          <p align="justify">
            Here's my discord  :  <label>rayveil</label> 
          </p>
      </div>

      <!-- Konten samping -->
      <aside class="profile">
        <article class="card">
          <header>
            <h2>Gilang Hayu Rahmawan</h2>
            <p>Just Casual Players</p>
            <figure>
              <img class="img-container" src="https://storage.googleapis.com/imgbkt-ray/ava.jpg" />
              <figcaption>
                永遠に続くものはない<br />
                この世界で
              </figcaption>
            </figure>
          </header>

          <section>
            <h3>Other Information</h3>

            <table>
              <tr>
                <th>Alias</th>
                <td>Rayveil / Ray</td>
              </tr>
              <tr>
                <th>Mains</th>
                <td>Elysia, Keqing, Jingliu</td>
              </tr>
              <tr>
                <th>Zodiac</th>
                <td>Pisces</td>
              </tr>
              <tr>
                <th>Birthday</th>
                <td>March, 17th</td>
              </tr>
              <tr>
                <th>Affiliation</th>
                <td>Oni-Giri</td>
              </tr>
            </table>
          </section>
        </article>
      </aside>
    </main>

    <footer>
      <p>Nachtwachter HQ &#169; 2022, Rayveil Nachtwachter</p>
    </footer>
  </body>
</html>
