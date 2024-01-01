<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manage Bus</title>

  <style>
    article {
      --img-scale: 1.001;
      --title-color: rgb(0, 0, 0);
      --link-icon-translate: -20px;
      --link-icon-opacity: 0;
      position: relative;
      border-radius: 16px;
      box-shadow: none;
      background: #f3f3f3;
      transform-origin: center;
      transition: all 0.4s ease-in-out;
      overflow: hidden;
    }

    /* basic article elements styling */
    article h2 {
      margin: 0 0 18px 0;
      font-family: "Bebas Neue", cursive;
      font-size: 1.9rem;
      letter-spacing: 0.06em;
      color: var(--title-color);
      transition: color 0.3s ease-out;
    }

    figure {
      margin: 0;
      padding: 0;
      aspect-ratio: 16 / 9;
      overflow: hidden;
    }

    article img {
      max-width: 100%;
      transform-origin: center;
      transform: scale(var(--img-scale));
      transition: transform 0.4s ease-in-out;
    }

    .article-body {
      padding: 24px;
    }

    /* using the has() relational pseudo selector to update our custom properties */
    article:has(:hover, :focus) {
      --img-scale: 1.1;
      --title-color: #ed1d1d;
      --link-icon-translate: 0;
      --link-icon-opacity: 1;
      box-shadow: rgba(7, 1, 1, 0.16) 0px 10px 36px 0px,
        rgba(2, 0, 0, 0.06) 0px 0px 0px 1px;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 48px 0;
      font-family: "Figtree", sans-serif;
      font-size: 1.2rem;
      line-height: 1.6rem;
      background-image: linear-gradient(45deg,
          hsla(0, 0%, 94%, 0.221),
          rgb(255, 255, 255));
      min-height: 100vh;
      align-items: center;
      text-align: center;
    }

    .articles {
      display: grid;
      max-width: 1200px;
      margin-inline: auto;
      padding-inline: 24px;
      grid-template-columns: Auto auto;
      gap: 24px;
      justify-items: center;
    }

    @container card (min-width: 380px) {
      .article-wrapper {
        display: grid;
        grid-template-columns: 100px 1fr;
        gap: 16px;
      }

      .article-body {
        padding-left: 0;
      }

      figure {
        width: 100%;
        height: 100%;
        overflow: hidden;
      }

      figure img {
        height: 100%;
        aspect-ratio: 1;
        object-fit: cover;
      }
    }

    .sr-only:not(:focus):not(:active) {
      clip: rect(0 0 0 0);
      clip-path: inset(50%);
      height: 1px;
      overflow: hidden;
      position: absolute;
      white-space: nowrap;
      width: 1px;
    }
  </style>
</head>

<body>
  <div>
    <h1 class="mbus">Manage Bus</h1>
  </div>

  <div class="content">
    <section class="articles">
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="msus.jpg" alt="" />
          </figure>
          <form action="bus_details.php">
            <div class="article-body">
              <button type="submit">
                <h2><a href="show_bus.php"></a> Add Bus</h2>
              </button>
            </div>
          </form>
        </div>
      </article>

      <article>
        <div class="article-wrapper">
          <figure>
            <img src="msus.jpg" alt="" />
          </figure>
          <form action="update_bus.php">
            <div class="article-body">
              <button type="submit">
                <h2>Modify Buses</h2>
              </button>
            </div>
          </form>
        </div>
      </article>
    </section>
  </div>
</body>

</html>