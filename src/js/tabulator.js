import xlsx from "xlsx";
import { createIcons, icons } from "lucide";
import Tabulator from "tabulator-tables";

(function () {
    "use strict";

    // Tabulator
    if ($("#tabulator").length) {
        // Setup Tabulator
        let table = new Tabulator("#tabulator", {
            ajaxURL: "https://dummy-data.left4code.com", //product list or can be users list
            ajaxFiltering: true,
            ajaxSorting: true,
            printAsHtml: true,
            printStyled: true,
            pagination: "remote",
            paginationSize: 5,
            paginationSizeSelector: [10, 20, 30, 40],
            layout: "fitColumns",
            responsiveLayout: "collapse",
            placeholder: "No matching records found",
            columns: [
                {
                    formatter: "responsiveCollapse",
                    width: 40,
                    minWidth: 30,
                    hozAlign: "center",
                    resizable: false,
                    headerSort: false,
                },

                // For HTML table
                {
                    title: "USERNAME",
                    minWidth: 200,
                    responsive: 0,
                    field: "username",
                    vertAlign: "middle",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div>
                            <div class="font-medium whitespace-nowrap">${
                                cell.getData().username
                            }</div>
                        </div>`;
                    },
                },
                {
                    title: "LAST NAME",
                    minWidth: 200,
                    responsive: 0,
                    field: "lastname",
                    vertAlign: "middle",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div>
                            <div class="font-medium whitespace-nowrap">${
                                cell.getData().lastname
                            }</div>
                        </div>`;
                    },
                },
                {
                    title: "FIRST NAME",
                    minWidth: 200,
                    responsive: 0,
                    field: "firstname",
                    vertAlign: "middle",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div>
                            <div class="font-medium whitespace-nowrap">${
                                cell.getData().firstname
                            }</div>
                        </div>`;
                    },
                },
                {
                    title: "SIGNATURE",
                    minWidth: 200,
                    responsive: 0,
                    field: "signature",
                    vertAlign: "middle",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div>
                            <div class="font-medium whitespace-nowrap">${
                                cell.getData().signature
                            }</div>
                        </div>`;
                    },
                },
                {
                    title: "ACTIONS",
                    minWidth: 200,
                    field: "actions",
                    responsive: 1,
                    hozAlign: "center",
                    vertAlign: "middle",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        let a =
                            $(`<div class="flex lg:justify-center items-center">
                            <a class="edit flex items-center mr-3" href="javascript:;">
                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                            </a>
                            <a class="delete flex items-center text-danger" href="javascript:;">
                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                            </a>
                        </div>`);
                        $(a)
                            .find(".edit")
                            .on("click", function () {
                                alert("EDIT");
                            });

                        $(a)
                            .find(".delete")
                            .on("click", function () {
                                alert("DELETE");
                            });

                        return a[0];
                    },
                },

                // For print format
                {
                    title: "USERNAME",
                    field: "username",
                    visible: false,
                    print: true,
                    download: true,
                },
                {
                    title: "LAST NAME",
                    field: "lastname",
                    visible: false,
                    print: true,
                    download: true,
                },
                {
                    title: "FIRST NAME",
                    field: "firstname",
                    visible: false,
                    print: true,
                    download: true,
                },
                {
                    title: "SIGNATURE",
                    field: "signature",
                    visible: false,
                    print: true,
                    download: true,
                },
            ],
            renderComplete() {
                createIcons({
                    icons,
                    "stroke-width": 1.5,
                    nameAttr: "data-lucide",
                });
            },
        });

        // Redraw table onresize
        window.addEventListener("resize", () => {
            table.redraw();
            createIcons({
                icons,
                "stroke-width": 1.5,
                nameAttr: "data-lucide",
            });
        });

        // Filter function
        function filterHTMLForm() {
            let field = $("#tabulator-html-filter-field").val();
            let type = $("#tabulator-html-filter-type").val();
            let value = $("#tabulator-html-filter-value").val();
            table.setFilter(field, type, value);
        }

        // On submit filter form
        $("#tabulator-html-filter-form")[0].addEventListener(
            "keypress",
            function (event) {
                let keycode = event.keyCode ? event.keyCode : event.which;
                if (keycode == "13") {
                    event.preventDefault();
                    filterHTMLForm();
                }
            }
        );

        // On click go button
        $("#tabulator-html-filter-go").on("click", function (event) {
            filterHTMLForm();
        });

        // On reset filter form
        $("#tabulator-html-filter-reset").on("click", function (event) {
            $("#tabulator-html-filter-field").val("name");
            $("#tabulator-html-filter-type").val("like");
            $("#tabulator-html-filter-value").val("");
            filterHTMLForm();
        });

        // Export
        $("#tabulator-export-csv").on("click", function (event) {
            table.download("csv", "data.csv");
        });

        $("#tabulator-export-json").on("click", function (event) {
            table.download("json", "data.json");
        });

        $("#tabulator-export-xlsx").on("click", function (event) {
            window.XLSX = xlsx;
            table.download("xlsx", "data.xlsx", {
                sheetName: "Products",
            });
        });

        $("#tabulator-export-html").on("click", function (event) {
            table.download("html", "data.html", {
                style: true,
            });
        });

        // Print
        $("#tabulator-print").on("click", function (event) {
            table.print();
        });
    }
})();
