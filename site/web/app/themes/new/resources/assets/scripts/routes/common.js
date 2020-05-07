
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
        { day: 'Monday', title: 'Online Class', time: '5:00 - 6:00pm' },
        { day: 'Wednesday', title: 'Online Class', time: '5:00 - 6:00pm' },
        { day: 'Friday', title: 'Online Class', time: '5:00 - 6:00pm' },
        { day: 'Saturday', title: 'Online Class', time: '11:30am - 12:30pm' },
      ]
      sideBar.insertAdjacentHTML('beforeend',showClasses(bjj));
    } else if (document.querySelector('body.judo') !== null) {
      sideBar = document.querySelector('.sideBar');
      var judo = [
        { day: 'Tuesday', title: 'Online Class', time: '6:00 - 7:00pm' },
        { day: 'Thursday', title: 'Online Class', time: '6:00 - 7:00pm' },
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
        { day: 'Monday', title: 'Online Class', time: '4:00 - 5:00pm' },
        { day: 'Wednesday', title: 'Online Class', time: '4:00 - 5:00pm' },
        { day: 'Friday', title: 'Online Class', time: '4:00 - 5:00pm' },
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
        { day: 'Tuesday', title: 'Online Class', time: '11:00am - 12:00pm' },
        { day: 'Thursday', title: 'Online Class', time: '11:00am - 12:00pm' },
        { day: 'Saturday', title: 'Online Class', time: '11:00am - 12:00pm' },
      ]
      sideBar.insertAdjacentHTML('beforeend',showClasses(mobilityTraining));
    }

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

  },
};
