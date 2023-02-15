

const main_layout =
[
    {
         path:"/trangchu",
         component: ()=>import("../layout/main_layout.vue"),
         children:
         [
            //route kho
             {
                path:"kho",
                name:"kho",
                component: ()=>import("../component/kho/kho.vue")
              },
              {
                path:"themkho",
                name:"themkho",
                component: ()=>import("../component/kho/themkho.vue")
              },
              {
                path:"suakho/:id",
                name:"suakho",
                component: ()=>import("../component/kho/suakho.vue")
              },
              //route nhanvien
              {
                path:"nhanvien",
                name:"nhanvien",
                component: ()=>import("../component/nhanvien/nhanvien.vue")
              },
              {
                path:"themnhanvien",
                name:"themnhanvien",
                component: ()=>import("../component/nhanvien/themnhanvien.vue")
              },

              {
                path:"suanhanvien/:id",
                name:"suanhanvien",
                component: ()=>import("../component/nhanvien/suanhanvien.vue")
              },
             {
                path:"vattu",
                name:"vattu",
                component: ()=>import("../component/vattu/vattu.vue")
              },
              //route nhap-xuat
               {
                path:"nhapkho",
                name:"nhapkho",
                component: ()=>import("../component/nhap_xuat/nhapkho.vue")
              },
              {
                path:"baocao",
                name:"baocao",
                component: ()=>import("../component/nhap_xuat/baocao.vue")
              },
            {
                path: '/:catchAll(.*)',
                component: Error
            },
            
         ]




    }

];
export default main_layout;