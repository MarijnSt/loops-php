<!DOCTYPE html>
<html>
  <head>
    <title>Looping php</title>
  </head>
  <body>
    <h1>TV shows</h1>
    <table>
      <thead>
        <tr>
          <th>TV show</th>
          <th>Rating</th>
        </tr>
      </thead>
      <tbody>
        <!-- array van series -->
        <?php
          $shows = [
            ["tv-show" => "Peaky Blinders", "rating" => 5],
            ["tv-show" => "Breaking Bad", "rating" => 5],
            ["tv-show" => "Game Of Thrones", "rating" => 0],
            ["tv-show" => "South Park", "rating" => 4]
          ];
        ?>

        <!-- url samenstellen -->
        <?php foreach($shows as $arr): ?>
          <?php
            $url = "https://www.google.com/search?q=" . str_replace(" ", "-", $arr["tv-show"]);
          ?>

        <!-- tabel opvullen -->
        <tr>
        	<td><a href=<?php echo ($url); ?>>
            <?php echo $arr["tv-show"]; ?>
          </a></td>
        	<td><?php echo $arr["rating"]; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
