<?php
set_time_limit(0);
ob_start('ob_gzhandler');
date_default_timezone_set("Asia/Ho_Chi_Minh");
$com =
array(
'cPhoto' => array(
  'Ảnh Đẹp À Nha ',
       'Đẹp Lắm  ',
         'ảnh đẹp quá cơ, tớ thích rồi đấy ',
       'quá đẹp, đẹp không chịu được ',
'ú tà tà, đăng cái ảnh ngàn năm có một ',
'Like Nào ',
),
'cBiasa' => array(
     'Nếu mỗi lần nhớ tới em anh được 500 đồng chắc giờ này anh đã vượt xa Bill Gates. 
',
'Phải biết điềm tĩnh trước gái xinh, không giật mình trước gái xấu. 
',
'Không được đầu gấu với gái ngoan, không cần nhẹ nhàng với gái dữ. 
',
'Không được tự tử nếu mất gái ngon, không ngậm bồ hòn ôm gái nát. 
',
'Không được bộc phát thích gái teen, không được ném mình vào gái ế. 
',
'Hôm nay nhận tấm thiệp hồng Định ngày hôn lễ Em đi lấy chồng Đọc thiệp hồng thấy shock hông Báo năm trồng trọt cày bừa đi tong Thầm mong sánh ước nên duyên Thành chồng, thành vợ ngày đêm nguyện cầu Em không thèm nói một câu Gật đầu đồng ý hay em lắc đầu Em trả kết quả hôm nay Cầm tay Anh gửi: Mai Em lấy chồng . 
',
'Khi bạn buồn hãy gọi cho tôi...tôi không hứa sẽ làm bạn cười...nhưng tôi hứa sẽ cười vào mặt bạn... 
',
'Em thân yêu. Sự thiếu vắng em đang làm tan vỡ trái tim anh. Anh yêu em, anh muốn quay lại với em. Tái bút : Chúc mừng em đã trúng giải đặc biệt 2 tỉ đồng. 
',
'KendyDat nhà ở HCM. Ngày 12/4/2010, bật lửa soi xem xăng còn hay hết, xăng còn, KendyDat thọ 20 tuổi !!! 
',
'Uống nước nhớ kẻ trồng cây (uống nước dừa). 
',
'Học cho lắm tắm cũng xà bông. 
',
'Một phụ nữ toàn diện là : sáng diện, trưa diện, chiều diện, tối diện...  
',
'Giang hồ hiểm ác, không bằng mạng lag thất thường. 
',
'Chỉ tay lên trời hận đời vô đối, chỉ tay xuống gối, đi ngủ cho rồi. 
',
'Ta về ta tắm ao ta dù trong dù đục cũng là cái ao. 
',
'Trúc xinh trúc mọc đầu đình...Em xinh em đứng một mình kệ em. 
',
'Trái tim em chỉ 2 lần mở cửa. Đón anh vào và tống cổ anh ra. (Câu chuẩn là : Trái tim em chỉ hé mở 1 lần, đón tình anh rồi khép kín muôn đời. 
',
'Bước đến nhà em, bóng xế tà. Đứng chờ năm phút bố em ra. Lơ thơ phía trước vài con chó. Lác đác đằng sau chổi lông gà. 
',
'Tình yêu là vĩnh cửu. Và chỉ duy nhất một thứ được phép thay đổi. Đó là người yêu. 
',
'Cần bán gấp nhà 3.000 m2, tường chống đạn, nhiều phòng, an ninh tốt, có camera, công an tuần 24/24. Địa chỉ: Nhà tù bộ công an. Giá thương lượng. 
',
'Xin thề tôi với anh kết nghĩa anh em , tuy không sinh cùng năm cùng tháng cùng ngày , nhưng nguyện sống cùng ngày cùng tháng cùng năm.  
',
'Định nghĩa mới về vợ  học dốt nói ngông , đi chơi lông bông , mồm thì khoác lác , mua sắm nát đời , mà câu nào nói ra cũng lời lời đạo lý 
',
'Trăm năm bia đá cũng mòn , bia chai cũng bể , chỉ còn bia ... ôm. 
',
'Nghệ thuật che lấp sự bất tài cũng đòi hỏi không ít tài năng. 
',
'Nếu có ai đó khen bạn   bạn có ½ là đẹp , ½ còn lại là tài năng , gộp lại thì vừa đẹp vừa tài năng , bạn hãy coi chừng  ½ đẹp tức là ½ đó không có chút chất xám nào , ½ tài năng , tức là ½ đó không có chút sắc đẹp nào, hợp lại hoá ra bạn là một con người vừa xấu vừa ngu đó sao?  
',
'Không ít phụ nữ già đi nhanh chóng có khi do họ động não suy nghĩ phải làm sao để mình trẻ lại. Chết cho người phụ nữ mình yêu vẫn dễ hơn là phải sống chung với họ. 
',
'Ngắn gọn thể hiện sự thông minh nhưng không đúng trong trường hợp người ta nói Anh yêu em  
',
'Đằng sau sự thành công của một người đan ông luôn có hình bóng của một người đàn bà , và đằng sau sự thất bại của một gười đan ông là một người đàn bà thật sự . 
',
'Thể thao là có hại . Nếu ta sống được thêm 10 năm nhờ luyện tập thì ta cũng mất 15 năm vào các buổi tập luyện đó.  
',
'Tại sao chỉ có danh hiệu bà mẹ việt nam anh hùng mà không có danh hiệu ông bố việt nam anh hùng nhỉ ? 
',
'Tình yêu là bất tử , chỉ có người yêu là thay đổi.  
',
'Hài kịch sẽ chuyển sang bi kịch nếu không bán được vé.  
',
'Một người vợ tốt luôn tha thứ cho chồng khi cô ta sai. 
',
'Ly dị là sự kiện mà người đàn ông phải giặt đồ cho mình ... thay vì trước đó phải giặt đồ cho cả hai .  
',
'Con đường ngắn nhất để đi từ một trái tim đến 1 trái tim là con đường truyền máu.  
',
'Chân lý là mặt trời chói lọi . Nếu bạn không nghiên cứu về nó thì đừng có điên mà nhìn vào nó . 
Theo lý thuyết thì Lý thuyết không khác với thực tế là mấy , nhưng thực tế thì thực tế khác xa lý thuyết. 
',
'Lương tâm là cái gì đó cảm thấy tổn thương trong khi các phần khác của cơ thể cảm thấy dễ chịu.  
',
'Lương tâm là cái buộc ta phải kể hết mọi bí mật cho người tình trước khi có ai đó mách. 
',
'Thà sống hèn còn hơn chết dại.  
',
'Bạn có thể mua một người trung thực không ? Không, nhưng bán một người như vậy dễ hơn . 
',
'Khi một cô gái được nhiều người theo đuổi cô ta sẽ làm cao , khi cô ấy được một người theo đuổi thì cô ta sẽ làm dáng , khi không có ai theo đuổi cô ấy cô ta sẽ làm ... thơ , và khi cô ta theo đuổi nhiều người cô ta sẽ làm ca ... ve.  
',
'Bia độc hơn rượu , bằng chứng trên thế giới chỉ có mộ bia mà không có mộ rượu  
',
'Đàn ông không khóc là đàn ông nhút nhát (không dám làm gì (khóc) là nhút nhát rồi). 
',
'Không có gì tiết kiệm thời gian và tiền bạc hơn là yêu ngay từ cái nhìn đầu tiên. 
',
'Anh bảo anh bỏ rượu...anh bỏ rượu. Em bảo anh bỏ thuốc...anh bỏ thuốc...Em bảo anh bỏ game...anh bỏ em. 
',
'Trăm lời anh nói không bằng làn khói anh còng SH  
',
'Rõ ràng là trên đời này không có gì là rõ ràng.Vì tao chắc chắn là trên đời này không có gì là chắc chắn.  
',
'Cách tốt nhất để giữ lời hứa là đừng hứa gì cả.  
',
'Tôi đã nói không với ma túy, nhưng tụi nó không chịu nghe.  
',
'Luôn luôn nhớ rằng bạn là duy nhất ... giống như những người khác  
',
'Luôn cố gắng khiêm tốn, và hãy lấy làm ... tự hào về điều đó  
',
'Khổ quá, sướng không chịu nổi  
',
'Đừng tự ti vì mình nghèo mà vẫn giỏi mà hãy tự hỏi tại sao mình giỏi mà mình vẫn nghèo.  
',
'Hồi lớp mầm em yêu con bé hàng xóm học cùng lớp vì hai đứa hay mút kẹo chung và cùng… truồng cởi tắm mưa, nhưng lên lớp lá nó bỏ em vì em… thấp hơn nó.  
',
'Có cái nắng, có cái gió nhưng thiếu… cái đó thì ta xa nhau, người ơiiiiiiiiii  
',
'Tự hào là hai bàn tay trắng lập nên… vô số nợ.  
',
'Điều tuyệt đối nhất chính là tất cả chỉ là tương đối  
',
'Ánh sáng đi trước âm thanh, vì thế, con người ta trông có vẻ thông minh cho đến khi ta nghe họ phát biểu!  
',
'Nghèo mà sài sang để sau này có giàu bớt bỡ ngỡ.  
',
'Bản chất xấu xa nhưng do dòng đời xô đẩy trở thành người lương thiện. 
Người ta có chí thì nên...còn mình có chí thì nên gội đầu.  
',
'Giang hồ hiểm ác anh không sợ...Chỉ sợ đường về vắng bóng em. 
',
'Phụ nữ thích mua đồ đẹp để con trai ngắm...Con trai thích ngắm con gái không mặc đồ...Vậy con gái mua sắm làm cái gì ??? 
',
'Nếu không có học sinh thì tất cả giáo viên đều mất dạy !  
',
'Đi một ngày đàng…mất 10.000 tiền cơm 
',
'Xăng có thể cạn, lốp có thể mòn……nhưng số máy và số khung vẫn không đổi ! 
',
'Người ta mất 3s để nói tiếng yêu….mất 3 giờ để giải thích…mất 3 ngày để chấp nhận và mất cả đời để thực hiện và ân hận….! 
',
'Dù gái hay trai….cứ lai rai mà đẻ ! 
',
'Nợ nần biến người ta thành……con nợ ! 
',
'Tôi cao không bằng ai….nhưng được cái nằm xuống thì tôi dài 1m76 ! 
',
'Nếu tình yêu là ánh sáng thì hôn nhân là hoá đơn tiền điện !  
',
'Đừng bao giờ đua đòi bồ bịch khi mà không ai yêu bạn cả ! 
',
'Một thằng ngốc xài máy vi tính nhận được thông báo sau Cannot found the printer …thế là hắn xoay cái monitor về phía máy in….thế đấy  
',
'Nếu chồng bị bệnh tiểu đường thì vợ bị bệnh gì ?........ đó là sún răng  
',
'Một cô gái có tật bẩm sinh là đi tiểu lúc 6h30 sáng không hơn không kém….nhưng vấn đề là cô ta luôn thức dậy vào lúc 7h30……thế đấy 
',
'Yêu nhau không phải là nhìn vào nhau mà là cùng nhau nhìn về một hướng... cái xe đang dựng ở gốc cây. 
',
'Toà hỏi: Thế hắn ta đã giết chết... anh như thế nào hử ? 
',
'Người cứu bạn khỏi cảnh sắp hết hơi chưa chắc là 1 bác sĩ, có thể là 1 tay vá xe  
',
'Em có biết rằng anh nhớ em nhiều lắm không? Anh ăn không ngon nhưng ngủ như điên, anh đi giầy quên đi tất, ăn sáng quên đánh răng, anh dùng xăng vo gạo, anh khờ khạo cũng chỉ vì yêu em đó 
',
'Em đừng buồn vì những lời bạn anh nói nhé, nó nói em :Nhìn xa cứ tưởng con người, nhìn gần mới biết đười ươi xổng chuồng  
Anh đau lắm nhưng không sao, bôi cao sẽ khỏi, không khỏi ăn tỏi sẽ hết, không hết cho chết là vừa. 
',
'Khi xưa ông cha ta xả thân cứu nước...Ngày nay, chúng ta xả nước cứu thân !!! 
',
'Đàn bà là những niềm đau...Anh em dù biết vẫn theo sau...đàn bà  
',
'Con gái cũng như một quyển sách...Đừng mong đọc một ngày là hiểu được.  
',
'Bực mình sinh sự...bụng bự sinh con... 
',
'Đề thi 40 câu, chỉ sai 1 câu còn lại xém đúng. 
',
'Giới tính của bạn là gì ?...Mình bảo nam, duy vật biện chứng bảo nữ...còn khoa học thì đang chứng minh... 
',
'Khi ai đó nói bạn vô duyên thì bạn nên mĩm cười vì vô duyên là viết tắt của Vô tư và Duyên dáng.  
',
'Khi lòng người giông bão, không có nơi nào gọi là bình yên.  
',
'Làm con gái phải ngang tàn ngạo ngễ...Sống trên đời phải hóng hách kiêu sa.  
',
'Nếu bạn bị ăn hiếp hãy nhanh tay gọi cho tôi...Tôi sẽ nhanh chân chạy tới...gọi cảnh sát.  
',
'Tôi xinh đẹp ? hiển nhiên...tôi thông minh ?...dĩ nhiên...tôi giàu có ?...tất nhiên...tôi học giỏi ?...đương nhiên..  
',
'Tuy mình không đẹp...nhưng còn lâu mới xấu.  
',
'Bạn gái tôi rất xấu nhưng được cái kết cấu nó đẹp.Tuy mình không đẹp...nhưng còn lâu mới xấu.  
',
'Bạn gái tôi rất xấu nhưng được cái kết cấu nó đẹp.Thất tình tự tử đu dây điện.Điện giật tê tê chết từ từ  
',
'Hồi xưa mình đẹp trai lắm...Bây giờ đỡ nhiều rồi.  
',
'Đau đầu vì tiền, điên đầu vì tình, đâm đầu vào tường.  
',
'Không bao giờ bán đứng bạn bè… khi chưa được giá.  
',
'Sống là phải cho đi ! Hãy cho đi tất cả những gì bạn có, để rồi hối hận nhận ra rằng đòi lại sẽ rất khó.  
',
'Trai thời nay như vàng lên giá...Gái thời nay như đá lót đường.Càng nhìn, anh càng thấy em giống con gái.Ai bảo rằng cây không buồn, không khóc...đá không sầu không nhớ thương ai ? Cây không buồn sao lá vàng rơi rụng. Đá không sầu sao đá phủ rêu xanh. 
',
'Xin bạn hãy dành ra vài giây để đọc hết câu này, đọc đến đây cũng đã hết vài giây rồi, cám ơn bạn.Bình tỉnh, tự tin, đừng cay cú – Âm thầm, chịu đựng, trả thù sau  ',
'Trông bạn quen quen, hình như tớ … chưa gặp bao giờ  
',
'Yêu hoài ốm, ôm hoài yếu.  
',
'Tiền túng – Tình tan – Tư tưởng tồi tàn – Tiến tới tự tử 
',
'Dù bạn không đẹp nhưng người khác vẫn mắc ói  
',
'Khi tôi ăn, cả quán dõi theo từng động tác. Tự tin – Gắp nhanh – Phong cách. Tôi thích cơm bụi. Cơm bụi rất lôi cuốn. Lôi cuốn là phải ăn nhanh. Ăn nhanh là sạch sẽ. Tôi là…Sinh viên nghèo!  
',
'Khi tôi chạy, mọi người dõi theo từng bước chạy của tôi. Mạnh mẽ - Tự tin – Thần tốc. Chạy rất lôi cuốn. Lôi cuốn là phải chạy nhanh. Chạy nhanh thì mới thoát chết. Tôi là…Cướp!  
',
'Nhà mình nghèo đến nỗi...bột giặt cũng không đủ xài.Mập thì đẹp – Ốm thì dễ thương – Lòi xương thì dễ mến.  
',
'Trước khi yêu em, anh đã yêu một người phụ nữ khác...đó là mẹ anh.  
',
'Đằng sau nụ cười là nước mắt...đằng sau nước mắt là..cá sấu.  
',
'Cũng như bao định luật bảo toàn khác...đói thì phải ăn (định luật bảo toàn tính mạng) 
',
'Có khi nào trên đường đời tấp nập, ta vô tình vấp phải sấp đô la?  
',
'Giang hồ hiểm ác anh không sợ, chỉ sợ đường về THẤY bóng em.  
',
      ),
'cKondisi' => array(
       array(
           array(
           'jancok',
           ' asu ',
           'anjing',
            'bangsat',
            'brengsek',
            'kontol',
            'jembut',
            ' peli ',
            'turuk',
            'tempik',
            'ngentot',
            'memek',
            'raimu',
            'matamu',
            'celeng',
            'damput',
            'pejuh',
            'jamput',
          ),
      array('Nếu mỗi lần nhớ tới em anh được 500 đồng chắc giờ này anh đã vượt xa Bill Gates. 
',
'Phải biết điềm tĩnh trước gái xinh, không giật mình trước gái xấu. 
',
'Không được đầu gấu với gái ngoan, không cần nhẹ nhàng với gái dữ. 
',
'Không được tự tử nếu mất gái ngon, không ngậm bồ hòn ôm gái nát. 
',
'Không được bộc phát thích gái teen, không được ném mình vào gái ế. 
',
'Hôm nay nhận tấm thiệp hồng Định ngày hôn lễ Em đi lấy chồng Đọc thiệp hồng thấy shock hông Báo năm trồng trọt cày bừa đi tong Thầm mong sánh ước nên duyên Thành chồng, thành vợ ngày đêm nguyện cầu Em không thèm nói một câu Gật đầu đồng ý hay em lắc đầu Em trả kết quả hôm nay Cầm tay Anh gửi: Mai Em lấy chồng . 
',
'Khi bạn buồn hãy gọi cho tôi...tôi không hứa sẽ làm bạn cười...nhưng tôi hứa sẽ cười vào mặt bạn... 
',
'Em thân yêu. Sự thiếu vắng em đang làm tan vỡ trái tim anh. Anh yêu em, anh muốn quay lại với em. Tái bút : Chúc mừng em đã trúng giải đặc biệt 2 tỉ đồng. 
',
'KendyDat nhà ở HCM. Ngày 12/4/2010, bật lửa soi xem xăng còn hay hết, xăng còn, KendyDat thọ 20 tuổi !!! 
',
'Uống nước nhớ kẻ trồng cây (uống nước dừa). 
',
'Học cho lắm tắm cũng xà bông. 
',
'Một phụ nữ toàn diện là : sáng diện, trưa diện, chiều diện, tối diện...  
',
'Giang hồ hiểm ác, không bằng mạng lag thất thường. 
',
'Chỉ tay lên trời hận đời vô đối, chỉ tay xuống gối, đi ngủ cho rồi. 
',
'Ta về ta tắm ao ta dù trong dù đục cũng là cái ao. 
',
'Trúc xinh trúc mọc đầu đình...Em xinh em đứng một mình kệ em. 
',
'Trái tim em chỉ 2 lần mở cửa. Đón anh vào và tống cổ anh ra. (Câu chuẩn là : Trái tim em chỉ hé mở 1 lần, đón tình anh rồi khép kín muôn đời. 
',
'Bước đến nhà em, bóng xế tà. Đứng chờ năm phút bố em ra. Lơ thơ phía trước vài con chó. Lác đác đằng sau chổi lông gà. 
',
'Tình yêu là vĩnh cửu. Và chỉ duy nhất một thứ được phép thay đổi. Đó là người yêu. 
',
'Cần bán gấp nhà 3.000 m2, tường chống đạn, nhiều phòng, an ninh tốt, có camera, công an tuần 24/24. Địa chỉ: Nhà tù bộ công an. Giá thương lượng. 
',
'Xin thề tôi với anh kết nghĩa anh em , tuy không sinh cùng năm cùng tháng cùng ngày , nhưng nguyện sống cùng ngày cùng tháng cùng năm.  
',
'Định nghĩa mới về vợ  học dốt nói ngông , đi chơi lông bông , mồm thì khoác lác , mua sắm nát đời , mà câu nào nói ra cũng lời lời đạo lý 
',
'Trăm năm bia đá cũng mòn , bia chai cũng bể , chỉ còn bia ... ôm. 
',
'Nghệ thuật che lấp sự bất tài cũng đòi hỏi không ít tài năng. 
',
'Nếu có ai đó khen bạn   bạn có ½ là đẹp , ½ còn lại là tài năng , gộp lại thì vừa đẹp vừa tài năng , bạn hãy coi chừng  ½ đẹp tức là ½ đó không có chút chất xám nào , ½ tài năng , tức là ½ đó không có chút sắc đẹp nào, hợp lại hoá ra bạn là một con người vừa xấu vừa ngu đó sao?  
',
'Không ít phụ nữ già đi nhanh chóng có khi do họ động não suy nghĩ phải làm sao để mình trẻ lại. Chết cho người phụ nữ mình yêu vẫn dễ hơn là phải sống chung với họ. 
',
'Ngắn gọn thể hiện sự thông minh nhưng không đúng trong trường hợp người ta nói Anh yêu em  
',
'Đằng sau sự thành công của một người đan ông luôn có hình bóng của một người đàn bà , và đằng sau sự thất bại của một gười đan ông là một người đàn bà thật sự . 
',
'Thể thao là có hại . Nếu ta sống được thêm 10 năm nhờ luyện tập thì ta cũng mất 15 năm vào các buổi tập luyện đó.  
',
'Tại sao chỉ có danh hiệu bà mẹ việt nam anh hùng mà không có danh hiệu ông bố việt nam anh hùng nhỉ ? 
',
'Tình yêu là bất tử , chỉ có người yêu là thay đổi.  
',
'Hài kịch sẽ chuyển sang bi kịch nếu không bán được vé.  
',
'Một người vợ tốt luôn tha thứ cho chồng khi cô ta sai. 
',
'Ly dị là sự kiện mà người đàn ông phải giặt đồ cho mình ... thay vì trước đó phải giặt đồ cho cả hai .  
',
'Con đường ngắn nhất để đi từ một trái tim đến 1 trái tim là con đường truyền máu.  
',
'Chân lý là mặt trời chói lọi . Nếu bạn không nghiên cứu về nó thì đừng có điên mà nhìn vào nó . 
Theo lý thuyết thì Lý thuyết không khác với thực tế là mấy , nhưng thực tế thì thực tế khác xa lý thuyết. 
',
'Lương tâm là cái gì đó cảm thấy tổn thương trong khi các phần khác của cơ thể cảm thấy dễ chịu.  
',
'Lương tâm là cái buộc ta phải kể hết mọi bí mật cho người tình trước khi có ai đó mách. 
',
'Thà sống hèn còn hơn chết dại.  
',
'Bạn có thể mua một người trung thực không ? Không, nhưng bán một người như vậy dễ hơn . 
',
'Khi một cô gái được nhiều người theo đuổi cô ta sẽ làm cao , khi cô ấy được một người theo đuổi thì cô ta sẽ làm dáng , khi không có ai theo đuổi cô ấy cô ta sẽ làm ... thơ , và khi cô ta theo đuổi nhiều người cô ta sẽ làm ca ... ve.  
',
'Bia độc hơn rượu , bằng chứng trên thế giới chỉ có mộ bia mà không có mộ rượu  
',
'Đàn ông không khóc là đàn ông nhút nhát (không dám làm gì (khóc) là nhút nhát rồi). 
',
'Không có gì tiết kiệm thời gian và tiền bạc hơn là yêu ngay từ cái nhìn đầu tiên. 
',
'Anh bảo anh bỏ rượu...anh bỏ rượu. Em bảo anh bỏ thuốc...anh bỏ thuốc...Em bảo anh bỏ game...anh bỏ em. 
',
'Trăm lời anh nói không bằng làn khói anh còng SH  
',
'Rõ ràng là trên đời này không có gì là rõ ràng.Vì tao chắc chắn là trên đời này không có gì là chắc chắn.  
',
'Cách tốt nhất để giữ lời hứa là đừng hứa gì cả.  
',
'Tôi đã nói không với ma túy, nhưng tụi nó không chịu nghe.  
',
'Luôn luôn nhớ rằng bạn là duy nhất ... giống như những người khác  
',
'Luôn cố gắng khiêm tốn, và hãy lấy làm ... tự hào về điều đó  
',
'Khổ quá, sướng không chịu nổi  
',
'Đừng tự ti vì mình nghèo mà vẫn giỏi mà hãy tự hỏi tại sao mình giỏi mà mình vẫn nghèo.  
',
'Hồi lớp mầm em yêu con bé hàng xóm học cùng lớp vì hai đứa hay mút kẹo chung và cùng… truồng cởi tắm mưa, nhưng lên lớp lá nó bỏ em vì em… thấp hơn nó.  
',
'Có cái nắng, có cái gió nhưng thiếu… cái đó thì ta xa nhau, người ơiiiiiiiiii  
',
'Tự hào là hai bàn tay trắng lập nên… vô số nợ.  
',
'Điều tuyệt đối nhất chính là tất cả chỉ là tương đối  
',
'Ánh sáng đi trước âm thanh, vì thế, con người ta trông có vẻ thông minh cho đến khi ta nghe họ phát biểu!  
',
'Nghèo mà sài sang để sau này có giàu bớt bỡ ngỡ.  
',
'Bản chất xấu xa nhưng do dòng đời xô đẩy trở thành người lương thiện. 
Người ta có chí thì nên...còn mình có chí thì nên gội đầu.  
',
'Giang hồ hiểm ác anh không sợ...Chỉ sợ đường về vắng bóng em. 
',
'Phụ nữ thích mua đồ đẹp để con trai ngắm...Con trai thích ngắm con gái không mặc đồ...Vậy con gái mua sắm làm cái gì ??? 
',
'Nếu không có học sinh thì tất cả giáo viên đều mất dạy !  
',
'Đi một ngày đàng…mất 10.000 tiền cơm 
',
'Xăng có thể cạn, lốp có thể mòn……nhưng số máy và số khung vẫn không đổi ! 
',
'Người ta mất 3s để nói tiếng yêu….mất 3 giờ để giải thích…mất 3 ngày để chấp nhận và mất cả đời để thực hiện và ân hận….! 
',
'Dù gái hay trai….cứ lai rai mà đẻ ! 
',
'Nợ nần biến người ta thành……con nợ ! 
',
'Tôi cao không bằng ai….nhưng được cái nằm xuống thì tôi dài 1m76 ! 
',
'Nếu tình yêu là ánh sáng thì hôn nhân là hoá đơn tiền điện !  
',
'Đừng bao giờ đua đòi bồ bịch khi mà không ai yêu bạn cả ! 
',
'Một thằng ngốc xài máy vi tính nhận được thông báo sau Cannot found the printer …thế là hắn xoay cái monitor về phía máy in….thế đấy  
',
'Nếu chồng bị bệnh tiểu đường thì vợ bị bệnh gì ?........ đó là sún răng  
',
'Một cô gái có tật bẩm sinh là đi tiểu lúc 6h30 sáng không hơn không kém….nhưng vấn đề là cô ta luôn thức dậy vào lúc 7h30……thế đấy 
',
'Yêu nhau không phải là nhìn vào nhau mà là cùng nhau nhìn về một hướng... cái xe đang dựng ở gốc cây. 
',
'Toà hỏi: Thế hắn ta đã giết chết... anh như thế nào hử ? 
',
'Người cứu bạn khỏi cảnh sắp hết hơi chưa chắc là 1 bác sĩ, có thể là 1 tay vá xe  
',
'Em có biết rằng anh nhớ em nhiều lắm không? Anh ăn không ngon nhưng ngủ như điên, anh đi giầy quên đi tất, ăn sáng quên đánh răng, anh dùng xăng vo gạo, anh khờ khạo cũng chỉ vì yêu em đó 
',
'Em đừng buồn vì những lời bạn anh nói nhé, nó nói em :Nhìn xa cứ tưởng con người, nhìn gần mới biết đười ươi xổng chuồng  
Anh đau lắm nhưng không sao, bôi cao sẽ khỏi, không khỏi ăn tỏi sẽ hết, không hết cho chết là vừa. 
',
'Khi xưa ông cha ta xả thân cứu nước...Ngày nay, chúng ta xả nước cứu thân !!! 
',
'Đàn bà là những niềm đau...Anh em dù biết vẫn theo sau...đàn bà  
',
'Con gái cũng như một quyển sách...Đừng mong đọc một ngày là hiểu được.  
',
'Bực mình sinh sự...bụng bự sinh con... 
',
'Đề thi 40 câu, chỉ sai 1 câu còn lại xém đúng. 
',
'Giới tính của bạn là gì ?...Mình bảo nam, duy vật biện chứng bảo nữ...còn khoa học thì đang chứng minh... 
',
'Khi ai đó nói bạn vô duyên thì bạn nên mĩm cười vì vô duyên là viết tắt của Vô tư và Duyên dáng.  
',
'Khi lòng người giông bão, không có nơi nào gọi là bình yên.  
',
'Làm con gái phải ngang tàn ngạo ngễ...Sống trên đời phải hóng hách kiêu sa.  
',
'Nếu bạn bị ăn hiếp hãy nhanh tay gọi cho tôi...Tôi sẽ nhanh chân chạy tới...gọi cảnh sát.  
',
'Tôi xinh đẹp ? hiển nhiên...tôi thông minh ?...dĩ nhiên...tôi giàu có ?...tất nhiên...tôi học giỏi ?...đương nhiên..  
',
'Tuy mình không đẹp...nhưng còn lâu mới xấu.  
',
'Bạn gái tôi rất xấu nhưng được cái kết cấu nó đẹp.Tuy mình không đẹp...nhưng còn lâu mới xấu.  
',
'Bạn gái tôi rất xấu nhưng được cái kết cấu nó đẹp.Thất tình tự tử đu dây điện.Điện giật tê tê chết từ từ  
',
'Hồi xưa mình đẹp trai lắm...Bây giờ đỡ nhiều rồi.  
',
'Đau đầu vì tiền, điên đầu vì tình, đâm đầu vào tường.  
',
'Không bao giờ bán đứng bạn bè… khi chưa được giá.  
',
'Sống là phải cho đi ! Hãy cho đi tất cả những gì bạn có, để rồi hối hận nhận ra rằng đòi lại sẽ rất khó.  
',
'Trai thời nay như vàng lên giá...Gái thời nay như đá lót đường.Càng nhìn, anh càng thấy em giống con gái.Ai bảo rằng cây không buồn, không khóc...đá không sầu không nhớ thương ai ? Cây không buồn sao lá vàng rơi rụng. Đá không sầu sao đá phủ rêu xanh. 
',
'Xin bạn hãy dành ra vài giây để đọc hết câu này, đọc đến đây cũng đã hết vài giây rồi, cám ơn bạn.Bình tỉnh, tự tin, đừng cay cú – Âm thầm, chịu đựng, trả thù sau  ',
'Trông bạn quen quen, hình như tớ … chưa gặp bao giờ  
',
'Yêu hoài ốm, ôm hoài yếu.  
',
'Tiền túng – Tình tan – Tư tưởng tồi tàn – Tiến tới tự tử 
',
'Dù bạn không đẹp nhưng người khác vẫn mắc ói  
',
'Khi tôi ăn, cả quán dõi theo từng động tác. Tự tin – Gắp nhanh – Phong cách. Tôi thích cơm bụi. Cơm bụi rất lôi cuốn. Lôi cuốn là phải ăn nhanh. Ăn nhanh là sạch sẽ. Tôi là…Sinh viên nghèo!  
',
'Khi tôi chạy, mọi người dõi theo từng bước chạy của tôi. Mạnh mẽ - Tự tin – Thần tốc. Chạy rất lôi cuốn. Lôi cuốn là phải chạy nhanh. Chạy nhanh thì mới thoát chết. Tôi là…Cướp!  
',
'Nhà mình nghèo đến nỗi...bột giặt cũng không đủ xài.Mập thì đẹp – Ốm thì dễ thương – Lòi xương thì dễ mến.  
',
'Trước khi yêu em, anh đã yêu một người phụ nữ khác...đó là mẹ anh.  
',
'Đằng sau nụ cười là nước mắt...đằng sau nước mắt là..cá sấu.  
',
'Cũng như bao định luật bảo toàn khác...đói thì phải ăn (định luật bảo toàn tính mạng) 
',
'Có khi nào trên đường đời tấp nập, ta vô tình vấp phải sấp đô la?  
',
'Giang hồ hiểm ác anh không sợ, chỉ sợ đường về THẤY bóng em.  
',

             ),
        ),
   array(
      array(
         'capek',
         'cape',
         'kesel',
         'keju',
         'linu',
         'remok',
           ),
      array(
          'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
             ),
        ),
   array(
      array(
         'galau',
         'gaslo',
         'gazlu',
         'gaslau',
         'galo',
           ),
      array(
          'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
           ),
        ),
   array(
      array(
         'sedih',
         'suedih',
         'duka',
         'merana',
           ),
      array(
         'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
             ),
        ),
   array(
      array(
         'cinta',
         'love',
         'tresno',
           ),
      array(
           'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
             ),
        ),
   array(
      array(
         'moga',
         'amin',
         'allah',
         'doa ',
             ),
      array(
        'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
             ),
        ),
   array(
      array(
         'hosting',
         'cron jobs',
         'cpanel',
         'whm',
           ),
      array(
         'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
             ),
        ),
   array(
      array(
         'chặn',
         
           ),
      array(
         'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
             ),
        ),
   array(
      array(
            ':D',
                      ),
      array(
           'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
          ),
       ),
    array(
      array(
            'sao',
            'đâu',
            'ai',
          ),
      array(
            'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
            ),
           ),
    array(
      array(
            'jempol',
            'komen',
          ),
      array(
            'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
            ),
           ),
    array(
      array(
            'Chào Tất Cả',
            'hi all',
            'hay all',
          ),
      array(
            'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
            ),
           ),
    array(
      array(
            'Ai Tương Tác 🌟 Thì  Kết Bạn Nha! Xin lỗi <nama> Vì Đã Làm Phiền...!!!  <telat>',
                      ),
      array(
            'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
                    ),
           ),
    array(
      array(
            'lạ',
          ),
      array(
            'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
            ),
       ),
    array(
      array(
            'wkwk',
            'haha',
            'hihi',
            'xixi',
            'hehe',
          ),
      array(
            'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
            ),
       ),
    array(
      array(
            'bot',
            'auto',
          ),
      array(
            'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
            ),
       ),
    array(
      array(
            'tt',
            'done',
'hóng',
'báo',
          ),
      array(
           'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
            ),
       ),
    array(
      array(
            'fuck',
            'clgt',
          ),
      array(
           'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
            ),
       ),
    array(
      array(
            'pacar',
            'kekasih',
          ),
      array(
          'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
            ),
       ),
    array(
      array(
            'mandi',
            'ados',
            'siram',
          ),
      array(
           'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
            ),
       ),
    array(
      array(
            'trims',
            'rimakasih',
            'thanks',
          ),
      array(
            'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
            ),
       ),
   ),

'cNo1' => array(
        'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
        ),

'cNoZ' => array(
       'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
       ),

'cLatah1'=> array(
       'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
       ),

'cLatah'=> array(
       'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
      ),

'cKata' => array(
     'Vì tương lai con em chúng ta. Đánh chết cha con em chúng nó!!!   
',
'Không nói chuyện trong khi hôn. 
',
'Học hành như cá kho tiêu, kho nhiều thì mặn học nhiều thì ngu. 
',
'Tiên học lễ hậu học....ăn. 
',
'Thiếu nữ là chữ viết tắt của....thiếu nữ tính. 
',
'Còn....nói còn tát. 
',
'Một điều nhịn là chín điều nhục. 
',
'Cá không ăn muối cá ươn. Con không ăn muối....thiếu iot rồi con ơi. 
',
'Hãy cho tôi một điểm tựa, tôi....mỏi lắm rồi. 
',
'Chúng ta yêu súc vật, vì....thịt chúng rất ngon. 
',
'Người yêu không tự sinh ra và cũng không tự mất đi, mà nó chỉ chuyển từ tay thằng này sang tay thằng khác!!! 
',
'Dụng binh không gì quý bằng thần tốc, Dụng đàn bà không gì quý bằng tâng bốc. 
',
'Đằng sau người đàn ông thành công luôn luôn có một người phụ nữ..........nói rằng anh ta sẽ chẳng bao giờ làm được điều gì nên hồn cả.!!  ',
'Ăn chọn nơi, chơi chọn hàng, lang thang chọn địa điểm. 
',
'Những cái hôn vụng trộm bao giờ cũng ngọt ngào nhất và bao giờ cũng tiềm ẩn những cái tát nảy đom đóm mắt nhất. 
',
'Để yêu một người đã khó, để đá nó càng khó hơn. 
',
'Đá bồ là một nghệ thuật và người đá bồ cũng là một nghệ sĩ. 
',
'Tình bạn sau tình yêu là phát đạn ân huệ cuả kẻ tử tù.  
',
'Đèn nhà ai nấy rạng, vợ thằng bạn thì cố mà chăm.  ',
' Da thịt đàn bà được nuôi dưỡng bằng âu yếm, lòng dạ đàn bà được nuôi dưỡng bằng kinh phí. 
',
'Trên bước đường thành công không có dấu chân của kẻ lười biếng vì kẻ lười biếng thì có đi bộ bao giờ, nhìn kỹ thì sẽ thấy rất nhiều vết bánh xe của họ để lại. 
',
'Tiền không thành vấn đề,  vấn đề là không có tiền. 
',
'Trăm năm kiều vẫn là kiều. Nên lần đầu khó là điều tất nhiên.  
',
'Bạn đừng đi tìm người hoàn thiện, vì không có ai hoàn thiện cả. Chỉ khi bạn yêu họ, họ mới hoàn thiện. 
',
'Hoa mọc trên tuyết vẫn tươi, người trong đau khổ vẫn cười là anh. 
',
'Dù ai nói ngả nói nghiêng, chàng lười vẫn cứ triền miên chép bài. 
',
' Yêu nhau trái ấu cũng tròn, ghét nhau đôi dép dẫu mòn cũng chia. 
',
'Kiếp sau xin chớ làm người, nguyện làm gia xúc cho nàng hốt phân. 
',
' Lời nói chẳng mất tiền mua, lựa lời mà nói cho đừng đập nhau. 
',
'Đàn ông miệng rộng thì sang, đàn bà miệng rộng tan hoang cửa nhà. 
',
'Học mà không chơi đánh rơi tuổi trẻ, Chơi mà không học bán rẻ tương lai. Thôi thì ta chọn cả hai, Vừa chơi vừa học tương lai huy hoàng. 
',
'Gà mà không gáy là con gà chiên. 
Gà mà hay gáy là con gà điên. 
Đi lang thang trong sân ,bắt con gà, bỏ vô nồi. 
Mua 2 lon Tiger , nhắm chân gà , nhắm chân gà. 
Gà mà không gáy là con gà gay. 
Gà mà không gáy là con gà toi. 
Đi lang thang trong sân, bắt con gà, ướp tiêu hành. 
Ăn lăn quay ra, chết tui rùi, cúm gia cầm
',
'Ba là con cá mập, mẹ là con cá voi, con là con cá kình, ba con cá hung hăng, la là lá la la ... quốc hết 1 con bò. 
Ba là xúc xích bò, Mẹ là xúc xích heo, Con là xúc xích gà, 3 xúc xích ngon ngon, la là lá la la ... Nấu với mì ăn liền. 
Ba là tên cướp vàng, Mẹ là tên cướp đô, Con là tên cướp tiền, 3 tên cướp lưu manh, la là lá la la ... Cướp hết 1 ngân hàng. 
Lung lay lung lay tình Mẹ, tình Cha, Lung lay lung lay tội một mái nhà. Lung lay lung lay tình Mẹ tình cha, Lung lay lung lay hai tiếng...ra toà. He he !
',
'Mồng 8/3 em ra ngoài đồng, 
chọn một bông hoa như con heo tặng bạn gái. 
Nào bông nào ọe ,nào bông nào bông ghê. 
1 phút 3 giây, bạn đã bay lên trời
',
'Làm thơ mình vốn không quen 
Nhưng vì...muốn quá nên xen một bài 
Bài này không được quá dài 
Cũng không được ngắn kẻo hoài phí công 
Làm thơ phải có...màu hồng  
Có mây,có gió bềnh bồng lướt bay  
Làm thơ phải có mê say 
Đã làm là suốt đêm ngày không thôi 
Không nên chỉ biết viết,ngồi  
Phải ra ngắm cảnh,nhìn trời...lấy thơ 
Khi nào đầu óc lơ mơ 
Học bài thì khó,làm thơ rất vào 
Mỗi khi cảm xúc tuôn trào  
Chính là đất nặn để nhào ra thơ 
Khi nào đầu óc lơ mơ 
Nói gì thế nhỉ?Ơ ơ...hết rồi 
Chú ý quan trọng : Đây không phải là bí kíp thật.Bạn nào làm theo là thành thơ...dở hơi ăn canh mồng tơi đó!HÌ HÌ
',
'Lấy vợ nên kiêng lấy vợ non 
Ra đường ai biết cháu hay con 
Nhí nha nhí nhảnh đòi vàng bạc 
Bán cả bàn thờ sắm phấn son!
',
'Lấy vợ ta nên lấy vợ non 
Tóc thề mườn mượt xõa eo thon 
Mắt sáng, môi hồng, da tươi thắm 
Đỡ tiền mua sắm những phấn son!
',
'Lấy vợ nên kiêng lấy vợ già 
Ra đường ai biết chị hay bà 
Sinh hai ba lượt mình teo nhếch 
Má hóp, xương lòi, ốm như ma!
',
'Lấy vợ xin anh lấy vợ già 
Ra đường em biết chuyện gần xa 
Lỡ anh đi lạc thì em nhắc 
Cũng tốt cho anh đó thôi mà!
',
'Lấy vợ nên kiêng vợ ngáy to 
Đêm nào đi ngủ cũng khò khò 
Tội đức lang quân nằm kế cạnh 
Mất ngủ lâu ngày chắc phát ho!
',
     ),
   'cAcak' => $text,
   );

 function _req($url,$type=null){
   $opts = array(
            19913 => 1,
            10002 => $url,
            10018 => 'MAUI-based Generic / bOt Koplak by Danz Ze',
            );
   $ch=curl_init();
   curl_setopt_array($ch,$opts);
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
  }

 function saveFile($x,$y){
   $f = fopen($x,'w');
             fwrite($f,$y);
             fclose($f);
   }

 function getData($dir,$token,$params=null){
    $param = array(
        'access_token' => $token,
        );
   if($params){ 
       $arrayParams=array_merge($params,$param);
       }else{
       $arrayParams =$param;
       }
   $url = getUrl('graph',$dir,$arrayParams);
   $result = json_decode(_req($url),true);
   if($result[data]){
       return $result[data];
       }else{
       return $result;
       }
   }

 function getUrl($domain,$dir,$uri=null){
   if($uri){
       foreach($uri as $key =>$value){
           $parsing[] = $key . '=' . $value;
           }
       $parse = '?' . implode('&',$parsing);
       }
   return 'https://' . $domain . '.facebook.com/' . $dir . $parse; 
   }

function getLog($x,$y){
if(!is_dir('log')){
   mkdir('log');
   }
   if(file_exists('log/cm_'.$x)){
       $log=file_get_contents('log/cm_'.$x);
       }else{
       $log=' ';
       }

  if(ereg($y[id],$log)){
       return false;
       }else{
if(strlen($log) > 2000){
   $n = strlen($log) - 2000;
   }else{
  $n= 0;
   }
       saveFile('log/cm_'.$x,substr($log,$n).' '.$y[id]);
       return true;
      }
 }

 function getC($c,$me,$data,$n,$emo){

       foreach($c[cKondisi] as $txt){
           foreach($txt[0] as $kata){
               if(ereg($kata,strtolower($data[$n][message]))){
                   $tKondisi = $txt[1];
                   $kondisi=true;
                   }
               }
           }

    $type=acak();

if($data[$n][type] == 'photo'){ $text = $c[cPhoto]; }
elseif($kondisi){ $text = $tKondisi; }
elseif($type == 'cNomer'){ 
if(count($data[$n][comments][data]) == 0 ){ $text = $c[cNo1]; }else{  $text = $c[cNoZ]; }
         }
elseif($type == 'cLatah'){ 
        if($n == 0 || $n == count($data)-1){ $text = $c[cLatah1]; }else{ $text = $c[cLatah]; }
         }
elseif($type == 'cKata'){ $text = $c[cAcak]; }
elseif($type == 'cBiasa'){ $text = $c[cBiasa]; }

  $replace = array(
        '<ucapan>',
        '<me>',
        '<nama>',
        '<idA>',
        '<idZ>',
        '<posA>',
        '<posZ>',
        '<mess>',
        '<messA>',
        '<messZ>',
        '<comA>',
        '<comZ>',
        '<no>',
        '<n>',
        '<lucu>',
        '<konyol>',
        '<motivasi>',
        '<telat>',
     ); 
  $p= urldecode('%0A') . '::::::::::::::::::::::::::::::::::::::::: (y) :::::::::::::::::::::::::::::::::::::::::' . urldecode('%0A');

  $replaced = array(
     ucapan(),
     ' @['.$me.':1] ',
     getName($data[$n][from][id],$data[$n][from][name]),
     getName($data[$n-1][from][id],$data[$n-1][from][id]),
     getName($data[$n+1][from][id],$data[$n+1][from][id]),
     getName($data[$n][comments][data][0][from][id],$data[$n][comments][data][0][from][name]),
     getName($data[$n][comments][data][count($data[$n][comments][data])-1][from][id],$data[$n][comments][data][count($data[$n][comments][data])-1][from][name]),
     $p.$data[$n][message].$p,
     $p.$data[$n-1][message].$p,
     $p.$data[$n+1][message].$p,
     $p.$com[0][message].$p,
     $p.$data[$n][comments][data][count($data[$n][comments][data])-1][message].$p,
     count($data[$n][comments][data])+1,
     urldecode('%0A'),
     $p.$asem.$p,
     $p.$asem.$p,
     $p.$asem.$p,
     getDelay($data[$n][created_time],1),
    );
   $result=str_replace($replace,$replaced,$text[rand(0,count($text)-1)]);
if($emo==1){
return getEmo($result);
}else{
return $result;
}
}
function getEmo($n){

$emo=array(
urldecode('%F3%BE%80%80'),
urldecode('%F3%BE%80%81'),
urldecode('%F3%BE%80%82'),
urldecode('%F3%BE%80%83'),
urldecode('%F3%BE%80%84'),
urldecode('%F3%BE%80%85'),
urldecode('%F3%BE%80%87'), 
urldecode('%F3%BE%80%B8'), 
urldecode('%F3%BE%80%BC'),
urldecode('%F3%BE%80%BD'),
urldecode('%F3%BE%80%BE'),
urldecode('%F3%BE%80%BF'),
urldecode('%F3%BE%81%80'),
urldecode('%F3%BE%81%81'),
urldecode('%F3%BE%81%82'),
urldecode('%F3%BE%81%83'),
urldecode('%F3%BE%81%85'),
urldecode('%F3%BE%81%86'),
urldecode('%F3%BE%81%87'),
urldecode('%F3%BE%81%88'),
urldecode('%F3%BE%81%89'), 
urldecode('%F3%BE%81%91'),
urldecode('%F3%BE%81%92'),
urldecode('%F3%BE%81%93'), 
urldecode('%F3%BE%86%90'),
urldecode('%F3%BE%86%91'),
urldecode('%F3%BE%86%92'),
urldecode('%F3%BE%86%93'),
urldecode('%F3%BE%86%94'),
urldecode('%F3%BE%86%96'),
urldecode('%F3%BE%86%9B'),
urldecode('%F3%BE%86%9C'),
urldecode('%F3%BE%86%9D'),
urldecode('%F3%BE%86%9E'),
urldecode('%F3%BE%86%A0'),
urldecode('%F3%BE%86%A1'),
urldecode('%F3%BE%86%A2'),
urldecode('%F3%BE%86%A4'),
urldecode('%F3%BE%86%A5'),
urldecode('%F3%BE%86%A6'),
urldecode('%F3%BE%86%A7'),
urldecode('%F3%BE%86%A8'),
urldecode('%F3%BE%86%A9'),
urldecode('%F3%BE%86%AA'),
urldecode('%F3%BE%86%AB'),
urldecode('%F3%BE%86%AE'),
urldecode('%F3%BE%86%AF'),
urldecode('%F3%BE%86%B0'),
urldecode('%F3%BE%86%B1'),
urldecode('%F3%BE%86%B2'),
urldecode('%F3%BE%86%B3'), 
urldecode('%F3%BE%86%B5'),
urldecode('%F3%BE%86%B6'),
urldecode('%F3%BE%86%B7'),
urldecode('%F3%BE%86%B8'),
urldecode('%F3%BE%86%BB'),
urldecode('%F3%BE%86%BC'),
urldecode('%F3%BE%86%BD'),
urldecode('%F3%BE%86%BE'),
urldecode('%F3%BE%86%BF'),
urldecode('%F3%BE%87%80'),
urldecode('%F3%BE%87%81'),
urldecode('%F3%BE%87%82'),
urldecode('%F3%BE%87%83'),
urldecode('%F3%BE%87%84'),
urldecode('%F3%BE%87%85'),
urldecode('%F3%BE%87%86'),
urldecode('%F3%BE%87%87'), 
urldecode('%F3%BE%87%88'),
urldecode('%F3%BE%87%89'),
urldecode('%F3%BE%87%8A'),
urldecode('%F3%BE%87%8B'),
urldecode('%F3%BE%87%8C'),
urldecode('%F3%BE%87%8D'),
urldecode('%F3%BE%87%8E'),
urldecode('%F3%BE%87%8F'),
urldecode('%F3%BE%87%90'),
urldecode('%F3%BE%87%91'),
urldecode('%F3%BE%87%92'),
urldecode('%F3%BE%87%93'),
urldecode('%F3%BE%87%94'),
urldecode('%F3%BE%87%95'),
urldecode('%F3%BE%87%96'),
urldecode('%F3%BE%87%97'),
urldecode('%F3%BE%87%98'),
urldecode('%F3%BE%87%99'),
urldecode('%F3%BE%87%9B'), 
urldecode('%F3%BE%8C%AC'),
urldecode('%F3%BE%8C%AD'),
urldecode('%F3%BE%8C%AE'),
urldecode('%F3%BE%8C%AF'),
urldecode('%F3%BE%8C%B0'),
urldecode('%F3%BE%8C%B2'),
urldecode('%F3%BE%8C%B3'),
urldecode('%F3%BE%8C%B4'),
urldecode('%F3%BE%8C%B6'),
urldecode('%F3%BE%8C%B8'),
urldecode('%F3%BE%8C%B9'),
urldecode('%F3%BE%8C%BA'),
urldecode('%F3%BE%8C%BB'),
urldecode('%F3%BE%8C%BC'),
urldecode('%F3%BE%8C%BD'),
urldecode('%F3%BE%8C%BE'),
urldecode('%F3%BE%8C%BF'), 
urldecode('%F3%BE%8C%A0'),
urldecode('%F3%BE%8C%A1'),
urldecode('%F3%BE%8C%A2'),
urldecode('%F3%BE%8C%A3'),
urldecode('%F3%BE%8C%A4'),
urldecode('%F3%BE%8C%A5'),
urldecode('%F3%BE%8C%A6'),
urldecode('%F3%BE%8C%A7'),
urldecode('%F3%BE%8C%A8'),
urldecode('%F3%BE%8C%A9'),
urldecode('%F3%BE%8C%AA'),
urldecode('%F3%BE%8C%AB'), 
urldecode('%F3%BE%8D%80'),
urldecode('%F3%BE%8D%81'),
urldecode('%F3%BE%8D%82'),
urldecode('%F3%BE%8D%83'),
urldecode('%F3%BE%8D%84'),
urldecode('%F3%BE%8D%85'),
urldecode('%F3%BE%8D%86'),
urldecode('%F3%BE%8D%87'),
urldecode('%F3%BE%8D%88'),
urldecode('%F3%BE%8D%89'),
urldecode('%F3%BE%8D%8A'),
urldecode('%F3%BE%8D%8B'),
urldecode('%F3%BE%8D%8C'),
urldecode('%F3%BE%8D%8D'),
urldecode('%F3%BE%8D%8F'),
urldecode('%F3%BE%8D%90'),
urldecode('%F3%BE%8D%97'),
urldecode('%F3%BE%8D%98'),
urldecode('%F3%BE%8D%99'),
urldecode('%F3%BE%8D%9B'),
urldecode('%F3%BE%8D%9C'),
urldecode('%F3%BE%8D%9E'), 
urldecode('%F3%BE%93%B2'), 
urldecode('%F3%BE%93%B4'),
urldecode('%F3%BE%93%B6'), 
urldecode('%F3%BE%94%90'),
urldecode('%F3%BE%94%92'),
urldecode('%F3%BE%94%93'),
urldecode('%F3%BE%94%96'),
urldecode('%F3%BE%94%97'),
urldecode('%F3%BE%94%98'),
urldecode('%F3%BE%94%99'),
urldecode('%F3%BE%94%9A'),
urldecode('%F3%BE%94%9C'),
urldecode('%F3%BE%94%9E'),
urldecode('%F3%BE%94%9F'),
urldecode('%F3%BE%94%A4'),
urldecode('%F3%BE%94%A5'),
urldecode('%F3%BE%94%A6'),
urldecode('%F3%BE%94%A8'), 
urldecode('%F3%BE%94%B8'),
urldecode('%F3%BE%94%BC'),
urldecode('%F3%BE%94%BD'), 
urldecode('%F3%BE%9F%9C'), 
urldecode('%F3%BE%A0%93'),
urldecode('%F3%BE%A0%94'),
urldecode('%F3%BE%A0%9A'),
urldecode('%F3%BE%A0%9C'),
urldecode('%F3%BE%A0%9D'),
urldecode('%F3%BE%A0%9E'),
urldecode('%F3%BE%A0%A3'), 
urldecode('%F3%BE%A0%A7'),
urldecode('%F3%BE%A0%A8'),
urldecode('%F3%BE%A0%A9'), 
urldecode('%F3%BE%A5%A0'), 
urldecode('%F3%BE%A6%81'),
urldecode('%F3%BE%A6%82'),
urldecode('%F3%BE%A6%83'), 
urldecode('%F3%BE%AC%8C'),
urldecode('%F3%BE%AC%8D'),
urldecode('%F3%BE%AC%8E'),
urldecode('%F3%BE%AC%8F'),
urldecode('%F3%BE%AC%90'),
urldecode('%F3%BE%AC%91'),
urldecode('%F3%BE%AC%92'),
urldecode('%F3%BE%AC%93'),
urldecode('%F3%BE%AC%94'),
urldecode('%F3%BE%AC%95'),
urldecode('%F3%BE%AC%96'),
urldecode('%F3%BE%AC%97'),
);
$mess=$emo[rand(0,count($emo)-1)];
$message = explode(' ',$n);
foreach($message as $x => $y){
$mess .= $emo[rand(0,count($emo)-1)].' '.$y.' ';
}
return($mess);
}


function banner(){
$result = '
💞===========🌷🌷===========💞 
WebSite: WwW*LikeViet*Pro
🚹===========🚺🚺===========🚹';
return $result;
}

function getName($id,$name){
if(ereg(' ',$name)){$n=explode(' ',$name); $x=$n[0];}else{$x=$name;}
return ' @['.$id.':'.$x.'] ';
}

function acak(){
    $acak = array('cBiasa','cNomer','cLatah','cKata',);
    return($acak[rand(0,count($acak)-1)]);
    }

function getDelay($n,$x=null){
$texts =array(
                    ' ',
                   );
  if(!$x){ $text=$texts[rand(0,count($texts)-1)];}
  $n=substr($n,11,8);
  $l=explode(':',$n);
  $t=((gmdate('i')*60)+gmdate('s'))-(($l[1]*60)+$l[2]);
  $m=floor($t/60);
  $d=$t-($m*60);
if($d<0){ return false;}else{
  if($m==0){
       return $text;
       }else{
       return $text;
       }
   } 
}

 function ucapan(){
$bot[jam]=7;
   $jam = array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','00',);
   $sapa = array('Star',);
   $time = gmdate('H',time()+$bot[jam]*3600);
   return str_replace($jam,$sapa,$time);
   }

function isMy($post,$me){
  if($post[from][id] == $me){
     return true;
     }else{
     return false;
    }
}

function komen($c,$me,$token,$telat,$banner,$emo){
$stat = getData('me/home',$token,array(
      'fields' => 'id,message,from,type,created_time,comments.id,comments.message,comments.from,comments.limit(100)',
      'limit' => 10,
                     )
                );

for($i=0;$i<count($stat);$i++){
if($stat[$i]){
       if(getLog($me,$stat[$i]) && !isMy($stat[$i],$me)){
          $message=getC($c,$me,$stat,$i,$emo);
          if($banner == '1'){
               $message .= urldecode('%0A') .  banner();
                }
          getData($stat[$i][id].'/comments',$token,array(
                      'message' => urlencode($message),
                     'method'=> 'post',
                      )
                 );
          }
     }
  } 
}
require("../_cnF/_star_cn_F.php");
$getinfo = mysql_query("SELECT * FROM `BotCmt` ORDER BY RAND() LIMIT 0,10");
$star = 0;
while ($gettoken = mysql_fetch_array($getinfo)){
$token= $gettoken['token'];
$check = json_decode(file_get_contents('https://graph.facebook.com/me?access_token='.$token),true);
if(!$check[id]){
@mysql_query("DELETE FROM BotCmt
            WHERE
               token ='".$token."'
         ");
continue;
} 
komen($com,$gettoken['idfb'],$token,$star,$gettoken['quangcao'],$gettoken['bieutuong']);
}
?>