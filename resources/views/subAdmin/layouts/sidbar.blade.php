<div class="col-md-3 sidbar bg-dark p-0 m-0" id="sidbar">
    <div class="row sidbar-header p-0 m-0">
        
        <img src="{{ asset('images/teacher-bg.jpg') }}" alt="">
        <div class="header-content p-0 m-0">
            <div class="row text-center">
                <div class="avatar m-auto">
                    <img src="{{ asset(auth('subAdmin')->user()->photo) }}" alt="" srcset="">
                </div>
                <div class=" col-md-12 my-1">
                    <h5 class="w-100 text-center my-0">لوحة تحكم المدير</h5>
                </div>
            </div>
            </div>
    </div>
    <div class="header-body p-0 text-center w-100">
        <div class="btn py-2 w-100 m-0">
        <a href="{{ route('subAdmin-panel') }}">
              <h2>
                <i class="fas fa-user-alt text-light m-auto"></i>
                <span class="btn text-light label">
                    لوحة التحكم
                </span>
            </h2>
            </a>
        </div>
        <div class="accordion w-100" id="accordionExample">
            <div class="card border-0">
              <div class="btn card-header bg-dark w-100" id="headingOne"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h2 class="mb-0">
                  <i class="fas fa-chalkboard-teacher text-light"></i>
                  <a class="btn text-center text-light label">
                    الأساتذة
                  </a>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse bg-secondary m-0" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body p-0">
                    <ul class="m-0">
                        <li >
                        <a href="{{route('teachers')}}" class="btn text-light py-3 w-100">
                                <i class="fas fa-tasks my-auto mx-1"></i>
                                <span class="label">
                                   اظهار الأساتذة
                                  </span>
                            </a>
                        </li>
                        <hr class="bg-light p-0 m-0"/>
                        <li>
                            <a href=" {{ route('add-teacher') }} " class="btn text-light py-3 w-100">
                                <i class="fas fa-plus-circle my-auto mx-1"></i>
                                <span class="label">
                                        اضافة استاذ
                                 </span>
                            </a>
                        </li>
                    </ul>       
                  </div>
              </div>
            </div>
            <div class="card border-0">
              <div class="btn card-header bg-dark w-100" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h2 class="mb-0">
                  <i class="fas fa-cubes text-light"></i>
                  <a class="btn text-center text-light label">
                    الأقسام
                  </a>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse bg-secondary" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body p-0">
                    <ul class="m-0">
                        <li >
                        <a href="{{ route('classes') }}" class="btn text-light py-3 w-100">
                                <i class="fas fa-tasks my-auto mx-1"></i>
                                <span class="label">
                                   اظهار الأقسام
                                  </span>
                            </a>
                        </li>
                        <hr class="bg-light p-0 m-0"/>
                        <li>
                           <a href=" {{route('add-class')}} " class="btn text-light py-3 w-100">
                            <i class="fas fa-plus-circle my-auto mx-1"></i>
                            <span class="label">
                               قسم جديد
                              </span>
                           </a>
                        </li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="card border-0">
                <div class="btn card-header bg-dark w-100" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <h2 class="mb-0">
                    <i class="fas fa-bullhorn text-light"></i>
                    <a class="btn text-center text-light label">
                      الاعلانات
                    </a>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse bg-secondary" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body p-0">
                      <ul class="m-0">
                          <li >
                          <a href="{{route('subAdmin-annonces')}}" class="btn text-light py-3 w-100">
                                <i class="fas fa-tasks my-auto mx-1"></i>
                                <span class="label">
                                     اظهار الاعلانات
                                    </span>
                              </a>
                          </li>
                          <hr class="bg-light p-0 m-0"/>
                          <li>
                             <a href="{{route('subAdmin-add-annonce')}}"  class="btn text-light py-3 w-100">
                              <i class="fas fa-plus-circle my-auto mx-1"></i>
                                <span class="label">
                                    اعلان جديد
                                   </span>
                             </a>
                          </li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="card border-0">
                <div class="btn card-header bg-dark w-100" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h2 class="mb-0">
                    <i class="fas fa-cogs text-light"></i>
                    <a class="btn text-center text-light label">
                      الاعدادات
                    </a>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse bg-secondary" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body p-0">
                      <ul class="m-0">
                          <li >
                          <a href="{{ route('school-infos') }}"  class="btn text-light py-3 w-100">
                            <i class="fas fa-school my-auto mx-1"></i>
                                <span class="label" >
                                    معلومات المؤسسة
                                   </span>
                              </a>
                          </li>
                          <hr class="bg-light p-0 m-0"/>
                          <li>
                          <a href="{{ route('subAdmin-Account-infos') }}" class="btn text-light py-3 w-100">
                                <i class="fas fa-tools my-auto mx-1"></i>
                                <span class="label">
                                    اعدادات الحساب
                                 </span>
                              </a>
                          </li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="btn py-2 w-100 m-0" id="show-sidbar">
                <h2>
                    <i class="fas fa-chevron-right text-light"></i>
                  <span class="btn text-light label">
                    اخفاء
                   </span>
                </h2>
              </div>
          </div>
    </div>
</div>