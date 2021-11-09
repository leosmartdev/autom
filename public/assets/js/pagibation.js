
    // selecting required element
    const element = document.querySelector(".paginationn_box .pagination ul");
    let page_input = document.querySelector(
        ".paginationn_box .pagination .totalPages"
    ).value;
    let active_page = document.querySelector(
        ".paginationn_box .pagination .active_page"
    ).value;
    let totalPages = parseInt(page_input);
    let page = parseInt(active_page);

    //calling function with passing parameters and adding inside element which is ul tag
    element.innerHTML = createPagination(totalPages, page);
    function createPagination(totalPages, page) {
        let liTag = "";
        let active;
        let beforePage = page - 1;
        let afterPage = page + 1;
        if (page > 1) {
            //show the next button if the page value is greater than 1
            liTag += ` <li class="page-item "  onclick="createPagination(totalPages, ${
                page - 1
            })"><a class="page-link d-none d-md-block"><img src="/autom/public/assets/img/icons/left.png" alt="left"></a> </li>
             <li class="page-item "  onclick="createPagination(totalPages, ${
                 page - 1
             })"> <a class="page-link">PREV</a> </li>
            `;
        }

        // how many pages or li show before the current li
        if (page == totalPages) {
            beforePage = beforePage - 2;
        } else if (page == totalPages - 1) {
            beforePage = beforePage - 1;
        }
        // how many pages or li show after the current li
        if (page == 1) {
            afterPage = afterPage + 2;
        } else if (page == 2) {
            afterPage = afterPage + 1;
        }

        for (var plength = beforePage; plength <= afterPage; plength++) {
            if (plength > totalPages) {
                //if plength is greater than totalPage length then continue
                continue;
            }
            if (plength == 0) {
                //if plength is 0 than add +1 in plength value
                plength = plength + 1;
            }
            if (page == plength) {
                //if page is equal to plength than assign active string in the active variable
                active = "active";
            } else {
                //else leave empty to the active variable
                active = "";
            }
            liTag += `<li class="page-item  ${active}" onclick="createPagination(totalPages, ${plength})"> <a class="page-link">${plength}</a>
            </li>`;
        }
        if (page < totalPages) {
            //show the next button if the page value is less than totalPage(20)
            liTag += `<li class="page-item next" onclick="createPagination(totalPages, ${
                page + 1
            })"><a class="page-link">NEXT</a></li>
            <li class="page-item next" onclick="createPagination(totalPages, ${
                page + 1
            })"><a class="page-link d-none d-md-block"><img src="/autom/public/assets/img/icons/right.png" alt="left"></a></li>`;
        }
         document.querySelector(".paginationn_box .pages_of").innerText = page;
        element.innerHTML = liTag; //add li tag inside ul tag
        return liTag; //reurn the li tag

    }

