    <?php
    use dd3v\unslider\Unslider;
    echo Unslider::widget([
          'options' => [
              'dots' => true,
              'keys' => true,
              'fluid' => true
           ],
           'slides' => [
                [
                    'img' => 'http://www.desktopaper.com/wp-content/uploads/children-school-student-smily-face-hd-wallpaper.jpg',
                    'title' => 'Yii PHP Framework',
                    'body' => 'Unslider widget for Yii 2',
                    'button' => ['title' => 'Download', 'href' => '#help', 'class' => 'btn']
                ],
                [
                    'img' => 'http://wallpapers55.com/wp-content/uploads/2013/12/hd-wallpaper-children-hd.jpg',
                    'title' => 'Yii PHP Framework',
                    'body' => 'Unslider widget for Yii 2',
                    'button' => ['title' => 'Download', 'href' => '#help', 'class' => 'btn']
                ],
                [
                    'img' => 'http://www.expoknews.com/wp-content/uploads/2014/07/Save-the-Children.jpg',
                    'title' => ' ',
                    'body' => ' ',
                    'button' => ['title' => 'Download', 'href' => '#help', 'class' => 'btn']
                ],
      ]]);
      ?>