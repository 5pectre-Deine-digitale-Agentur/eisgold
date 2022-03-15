<?php
  $video = get_sub_field( 'video' );
  if ( $video ): ?>

  <section data-scroll id="video">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="pointer__container">
            <svg xmlns="http://www.w3.org/2000/svg" width="599.626" height="106.726" viewBox="0 0 599.626 106.726">
              <defs>
                <style>
                  .cls-1 {
                    fill: none;
                    stroke: #faaf3a;
                    stroke-width: 3px;
                  }
                </style>
              </defs>
              <g id="Gruppe_2702" data-name="Gruppe 2702" transform="translate(-99.266 -7943.456)">
                <path id="Pfad_492" data-name="Pfad 492" class="cls-1" d="M2436.292,753.92l145.262-9.938s97.237-5.96,53.434,12.414,17.836,8.975,101.178,5.545,102.9-4.471,102.9-4.471,153.688-8.933,161.877,49.095,3.875,30.031,3.875,30.031" transform="translate(-2336.924 7201.94)"/>
                <path id="Pfad_493" data-name="Pfad 493" class="cls-1" d="M907.989,8073.354l26.585,28.822,28.606-21.159" transform="translate(-265.18 -54)"/>
              </g>
            </svg>
          </div>
          <div class="video__container">
            <video controls>
              <source src="<?php echo $video; ?>" type="video/mp4">
              <source src="mov_bbb.ogg" type="video/ogg">
              Your browser does not support HTML video.
            </video>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
