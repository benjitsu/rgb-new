export default {
  init() {
    // JavaScript to be fired on all pages
    $('.hamburger').click(function () {
      $(this).toggleClass('is-active');
      $('.navbar-collapse').toggleClass('show');
    });

    
    var today = '';

    // turn date number to day of week
    function getToday() {
      var d = new Date();
      var weekday = new Array(7);
      weekday[0] = 'Sunday';
      weekday[1] = 'Monday';
      weekday[2] = 'Tuesday';
      weekday[3] = 'Wednesday';
      weekday[4] = 'Thursday';
      weekday[5] = 'Friday';
      weekday[6] = 'Saturday';
      today = weekday[d.getDay()];
    }


    // build the class
    function showClasses(classArray) {
      getToday();
      var allClasses = '';
      for (var i = 0; i < classArray.length; i++) {
        if (today == classArray[i].day) {
          var theClass = '<div class="classToday row">';
          theClass += '<span class="name">' + classArray[i].title + '</span>';
          theClass += '<span class="hours">' + classArray[i].time + '</span>';
          theClass += '</div>';
          allClasses += theClass;
        }
      }
      if (allClasses == '') {
        allClasses = '<div class="classToday row"><span class="name">No classes today</span></div>'
      }
      allClasses += '<a class="link" href="/schedule">See Full Schedule</a>'
      return allClasses;
    }


    //append html to sidebar 
    var sideBar;
    if (document.querySelector('body.brazilian-jiu-jitsu') !== null) {
      sideBar = document.querySelector('.sideBar');
      var bjj = [
        { day: 'Monday', title: 'All Levels', time: '12:00 - 1:00pm' },
        { day: 'Monday', title: 'Beginners', time: '5:00 - 6:00pm' },
        { day: 'Monday', title: 'All Levels', time: '6:00 - 7:30pm' },
        { day: 'Tuesday', title: 'All Levels', time: '7:00 - 8:00am' },
        { day: 'Tuesday', title: 'All Levels', time: '9:00 - 10:00am' },
        { day: 'Tuesday', title: 'Beginners', time: '5:00 - 6:00pm' },
        { day: 'Tuesday', title: 'All Levels', time: '6:00 - 7:30pm' },
        { day: 'Wednesday', title: 'All Levels', time: '12:00 - 1:00pm' },
        { day: 'Wednesday', title: 'Beginners', time: '5:00 - 6:00pm' },
        { day: 'Wednesday', title: 'All Levels', time: '6:00 - 7:30pm' },
        { day: 'Thursday', title: 'All Levels', time: '7:00 - 8:00am' },
        { day: 'Thursday', title: 'All Levels', time: '9:00 - 10:00am' },
        { day: 'Thursday', title: 'Beginners', time: '5:00 - 6:00pm' },
        { day: 'Thursday', title: 'All Levels', time: '6:00 - 7:30pm' },
        { day: 'Friday', title: 'All Levels', time: '12:00 - 1:00pm' },
        { day: 'Friday', title: 'Beginners', time: '5:00 - 6:00pm' },
        { day: 'Friday', title: 'All Levels', time: '6:00 - 7:30pm' },
        { day: 'Saturday', title: 'NoGi', time: '10:30 - 11:30am' },
        { day: 'Saturday', title: 'All Levels', time: '11:30 - 1:00pm' },
        { day: 'Sunday', title: 'Open Mat', time: '10:00 - 12:00pm' },
      ]
      sideBar.insertAdjacentHTML('beforeend',showClasses(bjj));
    } else if (document.querySelector('body.judo') !== null) {
      sideBar = document.querySelector('.sideBar');
      var judo = [
        { day: 'Monday', title: 'Adults', time: '7:30 - 8:30pm' },
        { day: 'Wednesday', title: 'Adults', time: '7:30 - 8:30pm' },
      ]
      sideBar.insertAdjacentHTML('beforeend',showClasses(judo));
    } else if (document.querySelector('body.no-gi-grappling') !== null) {
      sideBar = document.querySelector('.sideBar');
      var noGi = [
 
      ]
      sideBar.insertAdjacentHTML('beforeend',showClasses(noGi));
    } else if (document.querySelector('body.kids-jiu-jitsu') !== null) {
      sideBar = document.querySelector('.sideBar');
      var kidsBjj = [
        { day: 'Monday', title: '', time: '4:00 - 5:00pm' },
        { day: 'Wednesday', title: '', time: '4:00 - 5:00pm' },
        { day: 'Friday', title: '', time: '4:00 - 5:00pm' },
        { day: 'Saturday', title: '', time: '9:30 - 10:30am' },
      ]
      sideBar.insertAdjacentHTML('beforeend',showClasses(kidsBjj));
    } else if (document.querySelector('body.wrestling') !== null) {
      sideBar = document.querySelector('.sideBar');
      var wrestling = [
        
      ]
      sideBar.insertAdjacentHTML('beforeend',showClasses(wrestling));
    } else if (document.querySelector('body.mobility-training') !== null) {
      sideBar = document.querySelector('.sideBar');
      var mobilityTraining = [
       
      ]
      sideBar.insertAdjacentHTML('beforeend',showClasses(mobilityTraining));
    } else if (document.querySelector('body.strength-and-conditioning') !== null) {
      sideBar = document.querySelector('.sideBar');
      var strengthC = [
        { day: 'Tuesday', title: '', time: '11:00 - 12:00pm' },
        { day: 'Thursday', title: '', time: '11:00 - 12:00pm' },
      ]
      sideBar.insertAdjacentHTML('beforeend',showClasses(strengthC));
    }

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

  },
};
