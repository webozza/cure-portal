$ = jQuery;

let cpaStatus = () => {
  $(".client-reporting tr td:nth-child(5)").each(function () {
    let cpaStatus = $(this);
    if (cpaStatus.text() == "Under Target") {
      cpaStatus.addClass("cpa-good");
    } else {
      cpaStatus.addClass("cpa-bad");
    }
  });
};

let modalOpenClose = () => {
  $(".modal-close a").click(function () {
    $(this).parent().parent().parent().fadeOut();
  });
  // Trigger for Add Insights Modal
  $(".trigger-modal-insights").click(function () {
    $(".modal-add-insights").fadeIn();
  });
  // Trigger for Add Briefs Modal
  $(".trigger-add-brief").click(async function () {
    $(".modal-add-brief").fadeIn();
  });
  // Trigger for Approvals Modal
  $(".cc--approval-comment").click(function () {
    $(".modal-approval-comment").fadeIn();
  });
};

let forServerOnly = () => {
  let currentLoc = window.location.href;
  if (currentLoc.indexOf("/skel") > -1) {
    $(".logo a").attr("href", "https://checklist.curedev.com.au/skel/");
  }
};

let clientReportingChart = () => {
  const ctx = document.getElementById("clientReportingChart");

  new Chart(ctx, {
    type: "line",
    data: {
      labels: ["Mon", "Tue", "Wed", "Thurs", "Fri", "Sat", "Sun"],
      datasets: [
        {
          fill: false,
          lineTension: 0,
          radius: 6,
          label: "Vyro",
          data: [52.74, 40.23, 60.21, 50.42, 35.62, 48.6, 50.65],
          borderWidth: 1,
        },
        {
          fill: false,
          lineTension: 0,
          radius: 6,
          label: "DQ",
          data: [25.74, 20.23, 17.21, 29.42, 32.62, 30.6, 25.76],
          borderWidth: 1,
        },
        {
          fill: false,
          lineTension: 0,
          radius: 6,
          label: "LGI",
          data: [11.74, 8.23, 6.21, 8.42, 9.62, 12.6, 10.65],
          borderWidth: 1,
        },
        {
          fill: false,
          lineTension: 0,
          radius: 6,
          label: "SL",
          data: [12.74, 15.23, 20.21, 17.42, 15.62, 18.6, 12.6],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
};

let removeOnApproval = () => {
  $("input.approval-status").click(function () {
    if (confirm("Sure you want to approve this?") == true) {
      $(this).closest("tr").remove();
    } else {
      return false;
    }
  });
};

let singleChecklist = () => {
  $(".single-checklist td select").select2({
    templateResult: formatState,
    templateSelection: formatState,
  });
  function formatState(opt) {
    if (!opt.id) {
      return opt.text.toUpperCase();
    }

    var optimage = $(opt.element).attr("data-image");
    console.log(optimage);
    if (!optimage) {
      return opt.text.toUpperCase();
    } else {
      var $opt = $(
        '<span><img src="' +
          optimage +
          '" width="60px" /> ' +
          opt.text.toUpperCase() +
          "</span>"
      );
      return $opt;
    }
  }
};

let usersModule = () => {
  $(".users .cure-table select").select2();
};

let addBriefModal = () => {
  // $(".select-brief-project select").select2();
  $(".select-brief-project select").change(function () {
    let selected = $(this).find(":selected").val();
    if (selected == "vyro") {
      $(".error-message").hide();
      $(".select-template-container").show();
    } else if (selected == "metluma") {
      $(".error-message").show();
      $(".error-message p").remove();
      $(".error-message").append(
        `<p style="color: red;">Client overview is not complete</p>`
      );
      $(".select-template-container").hide();
    } else if (selected == "treehouse") {
      $(".error-message").show();
      $(".error-message p").remove();
      $(".error-message").append(
        `<p style="color: red;">Client overview is complete but you are not the team leader for this project</p>`
      );
      $(".select-template-container").hide();
    }
  });
};

cpaStatus();
modalOpenClose();
// forServerOnly();
removeOnApproval();

// Conditionally Run
let currentLoc = window.location.href;
let curePages = {
  module_reporting: "client-reporting.php",
  module_checklists_single: "/checklists/",
  module_users: "users.php",
  module_brief: "briefing.php",
};

if (currentLoc.indexOf(curePages.module_reporting) > -1) {
  clientReportingChart();
} else if (currentLoc.indexOf(curePages.module_checklists_single) > -1) {
  singleChecklist();
} else if (currentLoc.indexOf(curePages.module_users) > -1) {
  usersModule();
} else if (currentLoc.indexOf(curePages.module_brief) > -1) {
  addBriefModal();
}
