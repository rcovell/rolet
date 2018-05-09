require('./bootstrap');
// require('./primary-navigation.js');
require('./custom.js');

// require('./vendor/equalize.min.js');
// import './vendor/equalize.min.js';
// import {helloWorld} from './primary-navigation.js';

// window.Prism = require('prismjs');
// import Prism from 'prismjs';

window.Vue = require('vue');

import Vue from 'vue';
import VeeValidate from 'vee-validate';

Vue.use(VeeValidate);
Vue.component('browser', require('./components/Browser.vue'));

import VueRecaptcha from 'vue-recaptcha';

/**
 * Uncomment below when compiling to production
 */
Vue.config.devtools = false;
Vue.config.debug = false;
Vue.config.silent = true;

const app = new Vue({
  el: '#app',
  components: { VueRecaptcha },
  data: function() {
    return {
      originalMenuItem: '',
      currentMenuItem: '',
      timeoutPtr: '',
      stickyHeader: false,
      showQuestions: true,
      showRoletAccountNumber: false,
      showGoogleAccountNumber: false,
      showOfficeAccountNumber: false,
      showTechnology: true,
      showingMobileNavigation: false,
    };
  },
  created: function() {
    window.addEventListener('resize', this.resized);
    document.addEventListener('scroll', this.checkScroll);
  },
  destroyed: function() {
    window.removeEventListener('resize', this.resized);
    document.removeEventListener('scroll', this.checkScroll);
  },
  mounted: function() {
    let url = new URL(this.$el.baseURI);
    let path = url.pathname.replace('/','');
    let parts = path.split('/');

    if (parts.length > 0) {
      this.currentMenuItem = this.originalMenuItem = parts[0];
    }
    this.resized();
    this.checkScroll();
  },
  updated: function() {
    //
  },
  methods: {
    toggleMobileNavigation: function() {
      let page = $('.content');
      let footer = $('.footer-container');
      let navigation = $('#navigation');
      let navigationLeft = parseInt(navigation.css('left'));

      navigation.animate({
        left: parseInt(navigation.css('left')) === 0 ? -navigation.outerWidth() - 25 : 0
      });

      page.animate({
        left: parseInt(navigation.css('left')) === 0 ? 0 : navigation.outerWidth()
      });

      footer.animate({
        left: parseInt(navigation.css('left')) === 0 ? 0 : navigation.outerWidth()
      });

      if (navigationLeft < 0) {
        $('.mobile-navigation-icon').removeClass('fa-bars').addClass('fa-times');
        $('body').addClass('mobile-navigation-visible');
        $('html').addClass('mobile-navigation-visible');
      }
      else {
        $('.mobile-navigation-icon').removeClass('fa-times').addClass('fa-bars');
        $('body').removeClass('mobile-navigation-visible');
        $('html').removeClass('mobile-navigation-visible');
      }

      if (this.showingMobileNavigation) {
        setTimeout(this.toggleShowingMobileNavigation, 500);
      }
      else {
        this.toggleShowingMobileNavigation();
      }
    },
    toggleShowingMobileNavigation: function() {
      this.showingMobileNavigation = !this.showingMobileNavigation;
    },
    toggleShowQuestions: function() {
      this.showQuestions = !this.showQuestions;
    },
    toggleShowAccountNumber: function(type) {
      switch (type) {
        case 'rolet':
          this.showRoletAccountNumber = !this.showRoletAccountNumber;
          break;
        case 'google':
          this.showGoogleAccountNumber = !this.showGoogleAccountNumber;
          break;
        case 'office':
          this.showOfficeAccountNumber = !this.showOfficeAccountNumber;
          break;
      }
    },
    toggleShowTechnology: function(state) {
      this.showTechnology = (state == 'yes')? true : false;
    },
    resized: function() {
      if (document.documentElement.clientWidth <= 991) {
        $('body').addClass('mobile-view');
      }
      else {
        if ($('body').hasClass('mobile-view')) {
          $('body').removeClass('mobile-view');
        }
      }
    },
    checkScroll: function() {
      this.stickyHeader = window.scrollY > 50;
    },
    showSubNavigation: function(menu) {
      if (!this.stickyHeader) {
        this.cancelResetSubNavigation();
        this.currentMenuItem = menu;
      }
    },
    isSubNavigationShowing: function(menu) {
      if (this.showingMobileNavigation) {
        return true;
      }
      return this.currentMenuItem === menu;
    },
    resetSubNavigation: function() {
      this.timeoutPtr = setTimeout(this.showOriginalMenu, 500);
    },
    cancelResetSubNavigation: function() {
      clearTimeout(this.timeoutPtr);
    },
    showOriginalMenu: function() {
      this.currentMenuItem = this.originalMenuItem;
    },
    validateQuestionnaire: function(e) {
      this.$validator.validateAll('questionnaire').then((result) => {
        if (result) {
          return;
        }
        e.preventDefault();
        return false;
      });
    },
    leaving: function() {
      if (this.$data.changed === true) {
        return 'Changes have been made. Are you sure you want to navigate away?';
      } else {
        return undefined;
      }
    },
    onSubmit: function(e) {
      this.$validator.validateAll('questionnaire').then((result) => {
        if (result) {
          this.$refs.invisibleRecaptcha.execute();
        }
        e.preventDefault();
        return false;
      });
    },
    onVerify: function(msg) {
      // console.log('message');
      // console.log(msg);
      this.$refs.questionnaire.submit();
    },
    onExpired: function() {
      console.log('expired');
      return false;
    },
  }
});
