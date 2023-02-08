<div id="navigation">
    <!-- Navigation Menu-->
    <ul class="navigation-menu list-unstyled">
      <li class="has-submenu">
        <a type="button"  data-toggle="modal" data-target=".bd-example-modal-xl"><i class=" typcn typcn-th-small-outline "></i>Menú</a>
      </li>
      @if(isset($info))
      @if($info['act_menu']->men_name != "Inicio")
        @foreach($info['submenu'][$info['act_menu']->men_uID] as $key => $value)
          <li class="has-submenu">
              <a href="{{ $value->sub_slug }}">
                  <i class="{{ $value->sub_icon }}"></i>
                  {{ $value->sub_name }}
              </a>
              @if(isset(json_decode($value->sub_bread, true)['B']['route']) && json_decode($value->sub_bread, true)['B']['route'] != '.' && isset(json_decode($value->sub_bread, true)['A']['route']) && json_decode($value->sub_bread, true)['A']['route'] != '.')

                  <ul class="submenu">
                    @if(json_decode($value->sub_bread, true)['B']['route'] != '.')
                      <li><a href="{{ url($info['submenu'][$info['act_menu']->men_uID][$key]->menu->men_slug.'/'.$value->sub_slug.'/'.json_decode($value->sub_bread, true)['B']['slug']) }}">{{ json_decode($value->sub_bread, true)['B']['name'] }}</a></li>
                    @endif
                    @if(json_decode($value->sub_bread, true)['A']['route'] != '.')
                      <li><a href="{{ url($info['submenu'][$info['act_menu']->men_uID][$key]->menu->men_slug.'/'.$value->sub_slug.'/'.json_decode($value->sub_bread, true)['A']['slug']) }}">{{ json_decode($value->sub_bread, true)['A']['name'] }}</a></li>
                    @endif

                  </ul>
                @endif
          </li>
        @endforeach

        @endif
        @endif
    </ul>
    <!-- End navigation menu -->
</div> <!-- end navigation -->

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-body ml-5">
              <!--<div class="row">
                <div class="col-md-3 m-2">
                  <div class="row" style="border:1px solid #f5f5f5; background: #f5f5f5">
                    <div class="col-3 p-3"  style="background:#EA1E63; color: #fff; font-size:27px; border-radius:0px 50px 50px 0px; ">
                      <i style="color: #fff" class="typcn typcn-th-small-outline pt-1 pb-2 pl-1"></i>
                    </div>
                    <div class="col-9 d-flex" style="border:1px solid #f5f5f5">
                      <div class="m-auto">
                        <h5 style="font-weight:300; font-family: 'Zilla Slab', serif; font-size:20px">
                          Reserva de Espacios
                        </h5>
                      </div>
                    </div>
                  </div>
                </div>

              </div>-->

              @if(isset($info))

              @foreach ($info['submenu'] as $key => $sub)



              <h4>{{ $sub[0]->menu->men_name }}</h4>
              <div class="row">
                @foreach($sub as $key2 => $value_sub)
                <a href="#" class="col-md-3 m-3 men_all">

                    <div class="row men_row_color">
                      <div class="col-3 p-3 men_option" style="background:{{ trim($value_sub->sub_color) }};">
                        <i class="{{ $value_sub->sub_icon }} pt-1 pb-2 pl-1 text-white"></i>
                      </div>
                      <div class="col-9 d-flex">
                        <div class="m-auto">
                          <h5 class="men_text">
                            {{ $value_sub->sub_name }}
                          </h5>
                        </div>
                      </div>
                    </div>

                </a>
                @endforeach
              </div>

              @endforeach
              @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cerrar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
