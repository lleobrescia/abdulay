<?php
/**
 * Template Name: Contact
 *
 * The template for displaying contact content
 *
 * This is the template that displays contact content.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abdulay
 */

get_header();
$tel_fixo    = get_field('telefone_fixo', 'option');
$tel_celular = get_field('telefone_celular', 'option');
$instagram   = get_field('instagram', 'option');
$facebook    = get_field('facebook', 'option');
$whatsapp    = get_field('link_whatsapp', 'option');
$email       = get_field('e-mail', 'option');
$end         = get_field('endereço', 'option');
?>

	<div id="primary" class="content-area contact">
		<main id="main" class="site-main">

      <div class="container">
        <div class="row">
          <div class="col-lg-9 offset-lg-2">
            <div class="row">
              <section class="col-md-7 col-lg-6">
                <header class="entry-header">
                  <h1 class="entry-title entry-title--has-bg entry-title--has-line">
                    <span>
                <?= __('Dúvidas? <br> Entre em contato!', 'abdulay'); ?>

                    </span>
                  </h1>
                  <div class="contact-info">
                    <?= $tel_fixo; ?> | <?= $tel_celular; ?> <i class="fa fa-whatsapp" aria-hidden="true"></i><br>
                    <?= $email; ?> <br>
                    <div class="contact-info__social">
                      <a href="<?= $facebook; ?>" title="Abdulay Eziquiel Facebook" rel="external" target="_blank">
                        <img src="<?= get_template_directory_uri(); ?>/images/icon-face_hover.png" alt="">
                      </a>
                      <a href="<?= $instagram; ?>" title="Abdulay Eziquiel Instagram" rel="external" target="_blank">
                        <img src="<?= get_template_directory_uri(); ?>/images/icon-instagram-hover.png" alt="">
                      </a>
                      <a href="<?= $whatsapp; ?>" title="Abdulay Eziquiel Whatsapp" rel="external" target="_blank">
                        <img src="<?= get_template_directory_uri(); ?>/images/icon-whatsapp_hover.png" alt="">
                      </a>
                    </div><!-- contact-info__social -->
                  </div><!-- contact-info -->
                </header><!-- .entry-header -->
              </section>

              <section class="col-md-5 col-lg-6">
                <div class="contact-form">
                <?php echo do_shortcode( '[contact-form-7 id="35" title="Contact form"]' ); ?>
                </div><!-- contact-form -->
              </section>
            </div>
          </div><!-- col-lg-8 -->
        </div><!-- row -->

        <div class="row">
          <div class="col-lg-10 offset-lg-2">
            <section class="contact-map">
              <div class="contact-map__title-box">
                <h2>
                <?= __('Nossa <br> localização', 'abdulay'); ?></h2>
                <?php the_field('descrição'); ?>
                <h3>
                <?= __('Rio de Janeiro', 'abdulay'); ?></h3>
                <address class="contact-map__title-box_end">
                <?= $end; ?>
                </address>
              </div>
            </section><!-- contact-map -->
          </div>
        </div><!-- row -->
      </div><!-- container -->

      <div class="contact__map">
        <div id="map"></div>
      </div><!-- contact__map -->

		</main><!-- #main -->
	</div><!-- #primary -->


  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1EBOvfM7saQfe_VMnesaWMHzgmKrljKk"></script>

<script type="text/javascript">
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
      // How zoomed in you want the map to start at (always required)
      zoom: 16,
      // The latitude and longitude to center the map (always required)
      center: new google.maps.LatLng(-22.983780, -43.217160), // New York
      // How you would like to style the map.
      // This is where you would paste any style found on Snazzy Maps.
      styles: [
  {
      "featureType": "all",
      "elementType": "labels.text.fill",
      "stylers": [
          {
              "saturation": 36
          },
          {
              "color": "#333333"
          },
          {
              "lightness": 40
          }
      ]
  },
  {
      "featureType": "all",
      "elementType": "labels.text.stroke",
      "stylers": [
          {
              "visibility": "on"
          },
          {
              "color": "#ffffff"
          },
          {
              "lightness": 16
          }
      ]
  },
  {
      "featureType": "all",
      "elementType": "labels.icon",
      "stylers": [
          {
              "visibility": "off"
          },
          {
              "color": "#9dc3b5"
          }
      ]
  },
  {
      "featureType": "administrative",
      "elementType": "geometry.fill",
      "stylers": [
          {
              "color": "#fefefe"
          },
          {
              "lightness": 20
          }
      ]
  },
  {
      "featureType": "administrative",
      "elementType": "geometry.stroke",
      "stylers": [
          {
              "color": "#fefefe"
          },
          {
              "lightness": 17
          },
          {
              "weight": 1.2
          }
      ]
  },
  {
      "featureType": "landscape",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#f5f5f5"
          },
          {
              "lightness": 20
          }
      ]
  },
  {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#f5f5f5"
          },
          {
              "lightness": 21
          }
      ]
  },
  {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#dedede"
          },
          {
              "lightness": 21
          }
      ]
  },
  {
      "featureType": "road.highway",
      "elementType": "geometry.fill",
      "stylers": [
          {
              "color": "#dddddd"
          },
          {
              "lightness": 17
          }
      ]
  },
  {
      "featureType": "road.highway",
      "elementType": "geometry.stroke",
      "stylers": [
          {
              "color": "#dddddd"
          },
          {
              "lightness": 29
          },
          {
              "weight": 0.2
          }
      ]
  },
  {
      "featureType": "road.arterial",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#dddddd"
          },
          {
              "lightness": 18
          }
      ]
  },
  {
      "featureType": "road.local",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#dddddd"
          },
          {
              "lightness": 16
          }
      ]
  },
  {
      "featureType": "transit",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#dddddd"
          },
          {
              "lightness": 19
          }
      ]
  },
  {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#dddddd"
          },
          {
              "lightness": 17
          }
      ]
  }
]
    };
    var pinColor = "75baa1";
    var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
      new google.maps.Size(21, 34),
      new google.maps.Point(0,0),
      new google.maps.Point(10, 34));
    var pinShadow = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
      new google.maps.Size(40, 37),
      new google.maps.Point(0, 0),
      new google.maps.Point(12, 35));
    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');
    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);
    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(-22.983780, -43.217160),
      map: map,
      icon: pinImage,
      shadow: pinShadow
    });
  }
</script>
<style type="text/css">
  /* Set a size for our map container, the Google Map will take up 100% of this container */
  #map {
    width: 100%;
    min-height: 757px;
    height: 100%;
  }
</style>
<?php

get_footer();
