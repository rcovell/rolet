<template>
  <span>
    <div :class="'test-browser-' + browserSize + ' mobile-test-container'">
      <div class="mobile-test-container-header">
        <div class="test-address-top">
          <div class="test-address-top-camera">
            <i class="fa fa-circle-o fa-mobile-responsive"></i>
          </div>
          <div class="test-address-top-ear-speaker-container">
            <div class="test-address-top-ear-speaker">
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="test-address-status">
          <div class="test-address-status-signal">
            <i class="fa fa-circle-o circle-1 fa-mobile-responsive"></i><i class="fa fa-circle-o circle-2 fa-mobile-responsive"></i><i class="fa fa-circle-o circle-3 fa-mobile-responsive"></i><i class="fa fa-circle-o circle-4 fa-mobile-responsive"></i><i class="fa fa-circle-o circle-5 fa-mobile-responsive"></i>
          </div>
          <div class="test-address-status-carrier">
            ROLET
          </div>
          <div class="test-address-status-wifi">
            <i class="fa fa-wifi"></i>
          </div>
          <div class="test-address-status-bolt hide">
            <i class="fa fa-flash bolt"></i>
          </div>
          <div class="test-address-status-battery">
            <i class="fa fa-battery-0 critical battery"></i>
          </div>
          <div class="test-address-status-percent">
            <span class="percent">0</span>%
          </div>
          <div class="test-address-status-location">
            <i class="fa fa-location-arrow"></i>
          </div>
        </div>
        <div class="test-address-bar">
           <!-- @keyup.enter.stop.prevent="loadWebsite" -->
          <form class="test_browser_frm" @submit.stop.prevent="loadWebsite">
            <input type="text" :class="urlBar()" v-model="websiteUrl" placeholder="http://your.website.address" />
          </form>
        </div>
        <div class="test-sizes">
          <ul>
            <li><a @click.stop.prevent="sizeChanged(320)" :class="sizeClasses(320)">320</a></li>
            <li><a @click.stop.prevent="sizeChanged(360)" :class="sizeClasses(360)">360</a></li>
            <li><a @click.stop.prevent="sizeChanged(480)" :class="sizeClasses(480)">480</a></li>
            <li><a @click.stop.prevent="sizeChanged(640)" :class="sizeClasses(640)">640</a></li>
            <li><a @click.stop.prevent="sizeChanged(768)" :class="sizeClasses(768)">768</a></li>
            <li><a @click.stop.prevent="sizeChanged(800)" :class="sizeClasses(800)">800</a></li>
            <li><a @click.stop.prevent="sizeChanged(1024)" :class="sizeClasses(1024)">1024</a></li>
          </ul>
        </div>
      </div>

      <div class="website-view-container">
        <div :class="showSpinner()">
          <div class="website-loading-overlay"></div>
        </div>
        <iframe class="website-view" scrolling="auto" src="http://www4.rolet.com" sandbox="allow-same-origin allow-forms allow-scripts" seamless></iframe>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="mobile-cord-container">
      <div class="mobile-cord">
        <div class="mobile-cord-decoration"></div>
      </div>
    </div>
  </span>
</template>

<script>
  export default {
    props: {
      'save-url': {
        type: String,
        required: true,
      },
    },
    data: function () {
      return {
        browserSize: 360,
        updateStatusTimer: '',
        updateStatusCount: 0,
        currentCharge: 0,
        initialCharge: true,
        skipCharge: false,
        percentLeft: 0,
        websiteUrl: '',
        urlError: false,
        loading: false,
      };
    },
    created() {
      //
    },
    mounted() {
      this.updateStatusTimer = setTimeout(this.updateStatus, 1000);
    },
    updated() {
      //
    },
    watch: {
      //
    },
    computed: {
      //
    },
    filters: {
      //
    },
    methods: {
      sizeChanged: function(size) {
        this.browserSize = size;
      },
      sizeClasses: function(size) {
        //Should have been done this way
        // :class="{'input': true, 'is-danger': errors.has('email') }"
        if (this.browserSize == size)
          return ['change-test-browser-size', 'active']
        return ['change-test-browser-size']
      },
      urlBar: function() {
        if (this.urlError)
          return ['test-website', 'error']
        return ['test-website']
      },
      showSpinner: function() {
        if (!this.loading)
          return ['website-loading-overlay-container', 'hide']
        return ['website-loading-overlay-container']
      },
      updateStatus: function() {
        let timer = this.getRandomInt(1000, 4000);
        let rand = this.getRandomInt(1, 5);
        let circlePosition = 0;

        for (circlePosition; circlePosition < 5; circlePosition++) {
          if (circlePosition < rand) {
            $('.circle-' + circlePosition).removeClass('fa-circle-o').addClass('fa-circle');
          }
          else {
            $('.circle-' + circlePosition).removeClass('fa-circle').addClass('fa-circle-o');
          }
        }

        if (this.initialCharge) {
          this.initialCharge = false;
          $('.mobile-cord-container').addClass('plugin');
          $('.test-address-status-bolt').removeClass('hide');
        }
        else {
          if ((this.currentCharge < 4) && (!this.skipCharge)) {
            if (!$('.mobile-cord-container').hasClass('plugin')) {
              $('.mobile-cord-container').addClass('plugin');
            }

            if (this.updateStatusCount % 2 === 0) {
              $('.battery').removeClass('fa-battery-' + this.currentCharge).addClass('fa-battery-' + ++this.currentCharge);

              this.percentLeft = this.currentCharge * 25;
              $('.percent').html(this.percentLeft);

              if ($('.battery').hasClass('critical')) {
                $('.battery').removeClass('critical');
              }

              if (this.percentLeft > 25) {
                if (!$('.battery').hasClass('charging')) {
                  $('.battery').addClass('charging');
                }

                if ($('.battery').hasClass('warning')) {
                  $('.battery').removeClass('warning');
                }
              }
              else if ((this.percentLeft === 25) && (!$('.battery').hasClass('warning'))) {
                $('.battery').addClass('warning');
              }
            }
          }
          else {
            if (($('.mobile-cord-container').hasClass('plugin')) && (this.currentCharge > 0)) {
              $('.mobile-cord-container').removeClass('plugin');
              $('.test-address-status-bolt').addClass('hide');
            }

            if ((this.updateStatusCount % 10 === 0) && (this.currentCharge > 0)) {
              $('.battery').removeClass('fa-battery-' + this.currentCharge).addClass('fa-battery-' + --this.currentCharge);

              this.percentLeft = this.currentCharge * 25;
              $('.percent').html(this.percentLeft);

              if (this.percentLeft > 25) {
                if (!$('.battery').hasClass('charging')) {
                  $('.battery').addClass('charging');
                }

                if ($('.battery').hasClass('warning')) {
                  $('.battery').removeClass('warning');
                }
              }
              else if ((this.percentLeft === 25) && (!$('.battery').hasClass('warning'))) {
                $('.battery').addClass('warning');
              }

              if (this.currentCharge > 1) {
                this.skipCharge = true;
              }
              else {
                this.skipCharge = false;
              }
            }
          }
        }

        this.updateStatusCount++;

        this.updateStatusTimer = setTimeout(this.updateStatus, timer);
      },
      loadWebsite: function() {
        if (this.isValidUrl(this.websiteUrl)) {
          this.loading = true;
          this.urlError = false;

          this.$nextTick(() => {
            if (!(/^(https?|ftp):\/\//i.test(this.websiteUrl))) {
    					this.websiteUrl = 'http://' + this.websiteUrl;
    				}

            $('.website-view').attr('src', this.websiteUrl);

            let postData = {};
            postData.websiteUrl = this.websiteUrl;

            axios.post(this.saveUrl,
              postData
            )
            .then(function (response) {
              // console.log(response);
            })
            .catch(function (error) {
              console.log('Browser error 0x1');
              console.log(error);
            });
          });

          this.$nextTick(() => {
            this.loading = false;
          });
        }
        else {
          this.urlError = true;
        }
      },
      isValidUrl: function (url) {
        return /^(http(s)?:\/\/)?(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test(url);
      },
      getRandom: function (min, max) {
        return Math.random() * (max - min) + min;
      },
      getRandomInt: function (min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
      }
    }
  }
</script>
