http://www.hhailuo.com/archives/18546

http://shouce.jb51.net/nginx-doc/Text/7.4_loadbalance.html    


https://www.processon.com/signup/submit

https://zhuanlan.zhihu.com/p/25960208 <https://zhuanlan.zhihu.com/p/25960208>  

    
    
    
    
    
    
http://www.hhailuo.com/tp-admin-v5/%E8%B7%AF%E7%94%B1
http://www.hhailuo.com/lee/



$('tbody tr td .del').click(function () {
                var id = $(this).attr('rel');
                $.ajax({
                    type: 'post',
                    data: {'id': id},
                    url: "{{ route('redpacket/delete') }}",
                    success: function (rsp) {
                        if (rsp.code == 1000200) {
                            popup(3, 2, rsp.msg, 500, true);
                        } else {
                            popup(3, 6, rsp.msg, 1000);
                        }
                    }
                });
            });
$(function(){
    $('#send').click(function(){
         $.ajax({
             type: "GET",
             url: "test.json",
             data: {username:$("#username").val(), content:$("#content").val()},
             dataType: "json",
             success: function(data){
                         $('#resText').empty();   //清空resText里面的所有内容
                         var html = ''; 
                         $.each(data, function(commentIndex, comment){
                               html += '<div class="comment"><h6>' + comment['username']
                                         + ':</h6><p class="para"' + comment['content']
                                         + '</p></div>';
                         });
                         $('#resText').html(html);
                      }
         });
    });
});
