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

let sbChartSL = () => {
  let flowPos = [
    "Sessions",
    "Product Views",
    "Add to Carts",
    "Checkouts",
    "Transactions",
  ];
  let flowData = [599, 287, 26, 10, 8];

  new Chart("sbChartSL", {
    type: "line",
    data: {
      labels: flowPos,
      datasets: [
        {
          data: flowData,
          label: "Users",
          fill: false,
          lineTension: 0,
          radius: 6,
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

let tsChartSL = () => {
  let productList = ["OFFICE", "ELLA", "DUTY", "MAGIC"];
  let salesPerc = [16.8, 16.5, 11.2, 10];

  new Chart("tsChartSL", {
    type: "bar",
    data: {
      labels: productList,
      datasets: [
        {
          data: salesPerc,
          label: "% of Total Sales",
          fill: false,
          lineTension: 0,
          radius: 6,
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

let stChartSL = () => {
  let flowPos = ["Mon", "Tue", "Wed", "Thurs", "Fri", "Sat", "Sun"];
  let flowData = [4, 36, 66, 84, 99, 115, 133];

  new Chart("stChartSL", {
    type: "line",
    data: {
      labels: flowPos,
      datasets: [
        {
          data: flowData,
          label: "% of $10K Weekly Sales Target",
          fill: false,
          lineTension: 0,
          radius: 10,
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

let cbcChartSL = () => {
  let flowPos = ["Mon", "Tue", "Wed", "Thurs", "Fri", "Sat", "Sun"];
  let flowData = [4, 36, 66, 84, 99, 115, 133];

  new Chart("cbcChartSL", {
    type: "bubble",
    data: {
      labels: flowPos,
      datasets: [
        {
          data: "55",
          label: "Facebook",
          fill: false,
          lineTension: 0,
          radius: 10,
          borderWidth: 1,
        },
        {
          data: "80",
          label: "Google",
          fill: false,
          lineTension: 0,
          radius: 10,
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
    if (selected == "client2") {
      $(".brief-error-msg").remove();
      $(".error-message").hide();
    } else if (selected == "client1") {
      $(".error-message").show();
      $(".error-message p").remove();
      $(".error-message").append(
        `<p style="color: red;">Client overview is not complete</p>`
      );
      $(".brief-error-msg").remove();
    } else if (selected == "client3") {
      $(".error-message").show();
      $(".error-message p").remove();
      $(".error-message").append(
        `<p style="color: red;">Client overview is complete but you are not the team leader for this project</p>`
      );
      $(".brief-error-msg").remove();
    }
  });
};

let createBriefValidation = () => {
  // Do not allow brief creation unless a brief template is selected
  $("#brief-form").on("submit", function (e) {
    e.preventDefault();
    let briefTemplate = $('[name="brief_template"]').val();
    let selectedClient = $(".select-brief-project select :selected").val();
    if (briefTemplate == "0" && $(".brief-error-msg").length == 0) {
      $(".brief-error-msg").remove();
      $("#brief-form .btn-cure").after(`
          <span class="brief-error-msg" style="color:red">No template selected</span>
      `);
    } else if (selectedClient == "0") {
      $(".brief-error-msg").remove();
      $("#brief-form .btn-cure").after(`
          <span class="brief-error-msg" style="color:red">No client selected</span>
      `);
    }

    if (briefTemplate !== "0" && selectedClient == "client2") {
      $("#brief-form").unbind("submit");
      $("#brief-form").trigger("submit");
    }
  });
  // pass the selected template value to server
  $(".select-template-container .radio-box label").click(function () {
    $(".brief-error-msg").remove();
    let selectedVal = $(this).parent().find("input").val();
    $('[name="brief_template"]').val(selectedVal);
  });
};

let activeMenu = () => {
  const pageTitle = $("h1").text();
  $(".sidebar ul li a").each(function () {
    let menuItem = $(this);
    let menuName = $(this).text();

    if (menuName == pageTitle) {
      menuItem.parent().addClass("active-menu");
    }
  });
};

activeMenu();
cpaStatus();
modalOpenClose();
removeOnApproval();

// Conditionally Run
let currentLoc = window.location.href;
let curePages = {
  module_reporting: "client-reporting.php",
  module_report_sl: "client-reporting/shoe-life.php",
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
  createBriefValidation();
} else if (currentLoc.indexOf(curePages.module_report_sl) > -1) {
  sbChartSL();
  tsChartSL();
  stChartSL();
  cbcChartSL();
}
