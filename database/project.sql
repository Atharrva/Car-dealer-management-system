-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 01:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `Car_id` int(11) NOT NULL,
  `Car_name` varchar(255) NOT NULL,
  `Image` text NOT NULL,
  `Price` int(11) NOT NULL,
  `Information` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Car_id`, `Car_name`, `Image`, `Price`, `Information`) VALUES
(1, 'Mercedes Benz S-Class', 'car1.jpg', 13600000, '<p>The updated S-Class features revisions to its exteriors, mainly the headlamps, tail lamps and bumpers. On the inside, the infotainment system gets an upgrade and now there are two 12.3-inch HD screens with a central command unit. There are new wood options for the interior trim and more leather options for upholstery. The seats now also have a ‘fragrance’ function to please your sense of smell. It also gets a 13 speaker, 590W Burmester surround sound system along with a 64 colour ambient lighting system.</p><br> \r\n\r\n<p>But the biggest change lies under the bonnet of the diesel S-Class. A new 3.0-litre, in-line 6-cylinder, BSVI-compliant diesel engine replaces the 3.0-litre, V6 unit seen in its predecessor. The new engine makes 286PS of maximum power & 600Nm of peak torque. That makes the S-Class diesel 31PS more powerful than before.</p>'),
(2, 'Range Rover', 'car2.jpg', 7187000, '<p>Range Rover Engine And Transmission: Land Rover’s most luxurious SUV, the Range Rover, is offered with four engine options in total - two petrol and two diesel. The entry-level petrol engine is a 3.0-litre V6 which produces 340PS of power while the other is a 5.0-litre V8 unit that puts out 525PS. The 5.0-litre supercharged V8 is also available in a more powerful state of tune where it makes 565PS. Meanwhile, the diesel engine options are a 3.0-litre V6 unit making 258PS and a 4.4-litre V8 unit that churns out 340PS of power. All engines come paired with an 8-speed automatic transmission and a four-wheel drive system.</p><br>\r\n\r\n<p>Range Rover Features: The luxury SUV that it is, the Range Rover comes with an extensive feature list, including four-zone climate control, two 10-inch displays for the infotainment system and climate controls, a premium Meridian surround sound system, 24-way adjustable front seats with heating/cooling functions, electronic air suspension, a 360-degree surround view camera system and heated rear windows.</p><br>\r\n\r\n<p>Range Rover Safety: In terms of safety, the Range Rover comes with seven airbags, dynamic stability control, hill launch assist, Land Rover’s terrain management system (Terrain Response 2), ABS with EBD, emergency brake assist, corner brake control and hill descent control.</p><br>'),
(3, 'Hennessey Venom GT', 'car3.jpg', 81700000, '<p>Hennessey Performance, the Texas-based tuner known for cranking out high amounts of horsepower from a variety of makes and models, unveiled the Venom F5 in 2017, a successor to the Hennessey Venom GT. The development has been ongoing, but the tuner has reached a remarkable milestone. The company announced the Venom F5’s engine, a twin-turbocharged 6.6-liter V8, would produce 1,817 horsepower (1,354 kilowatts) and 1,193 pound-feet (1,617 Newton-meters) of torque.</p><br>\r\n\r\n<p>Everything about the engine is overbuilt, according to company founder John Hennessey in the behind-the-scenes video above. The mill uses lightweight engine components, too, such as the crankshaft, pistons, connective rods, and the engine block itself. Other heavy-duty powertrain pieces include the billet aluminum intake manifold, billet steel hydraulic roller camshaft, stainless steel shaft-mounted rocker arms, billet dry sump oil system, and more.</p><br>\r\n\r\n<p>The engine incorporates a unique manifold design that, according to the company, places the intercooler between the plenum and cylinder heads. This lowers the inlet air temperatures from the turbochargers as it goes into the combustion chamber, which results in greater air density and overall greater power efficiency. This helps the engine produces its high power figures with the mill offering over 1,000 lb-ft (1,355 Nm) of torque from 2,000 to 8,000 rpm.</p>'),
(4, 'Land Cruiser V8', 'car4.jpg', 8602000, '<p>Toyota launched a mid-life facelift version of Land Cruiser 200 in 2015 with minor changes made to the exterior and interior. On the outside, it gets additional elements such as a new hexagonal grille, LED headlamps, restyled tail-lights, and redesigned alloy wheels. In fact, the SUV looks even more imposing now with elevated horizontal character lines, new three-slat grill and chrome garnish that extends horizontally across the LED headlamps. Inside the feature list is par excellence and truly defines why this car is a luxury SUV. The high capacity 4.5 liters twin-turbo V8 diesel unit, carried over from the previous model makes robust power output and is linked to a six-speed automatic transmission.</p><br>\r\n\r\n<p>It uses a high capacity 4.5 liters, diesel engine tuned to produce 268bhp of power and 650Nm of torque. The engine is mated to a six-speed automatic transmission and drive is channelized to all four wheels through a four-wheel drive system. </p><br>'),
(5, 'Jaguar XE', 'car5.jpg', 4664000, '<p>Cosmetically, the 2020 Jaguar XE facelift gets a larger and revised mesh grille. The headlamps are now 12 mm slimmer and get the new J-blade LED daytime running lights that is now standard on all Jag models. The air intakes on the bumper are larger while the alloy wheel design has been reworked. The LED taillights also get the sharper treatment and the car certainly looks more handsome than the current version.</p><br>\r\n\r\n<p>The upgrades are far more extensive on the inside with the Jaguar XE facelift getting a new dual touchscreen system for the centre console. The Touch Pro Duo infotainment system adds a futuristic touch to the cabin and quite similar with the new Land Rovers too like the Velar. The 10.2-inch top screen allows a number of connectivity options, navigation, and more. The lower screen is for the automatic climate control system with pull-push knobs. The cabin also comes with the pistol grip gear selector from the F-Type and the E-Pace, while the multi-function steering wheel comes from the I-Pace with the hidden-until-lit buttons. Other features include leather upholstery, wireless charging, smartphone connectivity in form of Apple CarPlay and Android Auto, hill assist, lane-keep assist and a variety of creature comforts.</p><br>\r\n\r\n<p>Both petrol and diesel engines on the 2020 Jaguar XE facelift have been upgraded to meet the upcoming BS6 regulations. The 2.0-litre Ingenium petrol engine which punches out 247 bhp at 5,500 rpm and has a peak torque output of 365 Nm at 1500 - 4,000 rpm. The 2.0-litre diesel makes 178 bhp at 4,000 rpm and peak torque is rated at 430 Nm at 1,750 - 2,500 rpm.  All the engines are paired with an 8-speed automatic transmission.</p><br>'),
(6, 'BMW Z4', 'car6.jpg', 6599000, '<p>With large Air Breathers on the front wheel arches and aerodynamic air vents, the all-new BMW Z4 Roadster looks and moves like a true driver\'s machine. The distinctive rear spoiler stands out elegantly from the surface while the lateral design lines flowing in at the shoulders frame the slim LED rear lights. The rear apron that combines with the diffusor and exhaust tailpipes, radiates a special presence and sporting flair.</p><br>\r\n\r\n<p>The design of the interior also places the focus on the puristic sportiness of the all-new BMW Z4 Roadster. Inside there is a clearly structured arrangement of control elements, complemented by the driver-orientated cockpit design that enhances the focus on the driving experience. The Light package lends an elegant ambience that invites passengers to relax. The electric seat adjustment is easy to use and the memory function allows the driver to save preferred settings. The through-loading system can utilize greater storage space when transporting larger items. The practicality of the all-new BMW Z4 Roadster features an increased storage space behind the seats with a retaining net, large cupholders under the centre armrest cover and roomy door pockets. The massive 10.3-inch multimedia display takes prominence in the centre, while a 12.3-inch digital display replaces the conventional instrument console. The two-door also comes with two-zone climate control, electrically adjustable front seats, ambient lighting and more. The M40i also gets a 364 watt Harman Kardon system and a Head Up Display (HUD).</p><br>\r\n\r\n<p>The new BMW Z4 Roadster is available in two engine variants. The Z4 sDrive20i uses a 2.0-litre four-cylinder petrol motor that churns out 194 bhp and 320 Nm of peak torque. The car accelerates from 0 -100 kmph in just 6.6 seconds. The more powerful and feature loaded Z4 M40i is powered by the 3.0-litre petrol motor tuned for 335 bhp and 500 Nm of peak torque. The M40i can sprint from 0-100 kmph in just 4.5 seconds. Both engines are paired with the 8-speed Steptronic Sport Transmission. Like all BMW models, the Z4 Roadster too gets 50:50 weight distribution for optimum drive with power sent only to the rear wheels.</p><br>'),
(7, 'Tesla Model S', 'car7.jpg', 15000000, '<p>The Tesla Model S is an all-electric five-door liftback sedan, produced by Tesla, Inc., and introduced on June 22, 2012. As of March 2020, the Model S Long Range Plus has an EPA range of 390 miles (630 km), which is higher than any other battery electric car.</p><br>\r\n\r\n<p>Model S cars built from October 2014 have a feature called Autopilot,which is an advanced driver assistance system that allows the car to operate without assistance from the driver (but the driver must supervise continuously and take control if there is an issue). Autopilot 2.0 (introduced October 2016) also includes Enhanced Summon, which allows the car to navigate through a parking lot to come to you, without anyone in the driver\'s seat. Sentry mode, available on cars built after August 2017, is a feature which senses and records suspicious activity around the car.</p><br>'),
(8, 'Koenigsegg Regera', 'car8.jpg', 300000000, '<p>In a world where mega horsepower, multi-million-dollar hypercars seem to be coming out every other week, the Koenigsegg brand still dominates the headlines. The company\'s latest creation is the Regera, and although it has the exorbitant price tag, the rarity factor (limited to 80 units), and the insane performance figures (1,489 horsepower and 1,475 lb-ft of torque), the Regera breaks new ground and has the world swooning for being a hybrid hypercar with no gearbox. There isn\'t even a reverse gear, and the 5.0-liter twin-turbo V8 will only propel the car forwards.</p><br>\r\n<p>So what is it? An ornament? A publicity stunt? No. The Regera is a symbol of incredible innovation and boasts features that make cars like the McLaren P1 and Bugatti Chiron seem a bit \"last week\". Three electric motors stimulate the car\'s ability and allow it to reverse, but this statement doesn\'t do the whole package justice, so keep reading to see why the Regera is one of the greatest technological achievements of the decade.</p><br>'),
(9, 'Ford Mustang', 'car9.jpg', 7461000, '<p>Ford Mustang Facelift: Revealed internationally last year, the facelifted Ford Mustang is expected to hit the Indian market this year. Read in detail about the updated Mustang here.</p><br>\r\n\r\n<p>Ford Mustang Price: Available in a single variant and engine option, the Ford Mustang is priced at Rs 74.62 lakh (ex-showroom, Delhi)</p><br>\r\n\r\n<p>Ford Mustang Engine: The Ford Mustang is powered by a 5.0-litre Ti-VCT V8 petrol engine rated at 401PS and 515Nm, mated to a 6-speed automatic transmission. The Ford Mustang offers four selectable drive modes: Normal, Sport, Sport+ and Snow/Wet.</p><br>\r\n \r\n<p>Ford Mustang Features: The Ford Mustang offers eight airbags, including passenger knee airbag, ABS, ESC and traction, programmable key and  Isofix child seat anchors, among others, as safety features. The Mustang also packs electronic line-lock (aids burnouts), 8-inch SYNC 3 infotainment system with Android Auto and Apple CarPlay coupled to a  9-speaker sound system with an amplifier, HID projector headlamps and more.</p><br>'),
(10, 'Rolls Royce Phantom VI', 'car10.jpg', 70600000, '<p>Rolls-Royce has revealed the prices of the eighth-generation of the Phantom in India. The CBU unit is priced at Rs 9.5 crores for the standard wheelbase and extends to Rs 11.5 crores for the extended wheelbase version with personalisation options. 2018 Rolls-Royce Phantom is the most expensive car on sale in India currently. Underneath the car is an all-aluminium spaceframe chassis which is loosely related to that of its predecessor. Rolls-Royce says that it is lighter in weight and 30 per cent stiffer than before, traits that make the new Phantom more efficient. The British luxury carmaker has also confirmed that the platform will underpin its first-ever SUV, the Cullinan, and the next generation models of the Wraith, Dawn and the Ghost. Rolls-Royce says that none of its cars, in the future, will have a monocoque construction either.</p><br>\r\n\r\n<p>It is powered by a twin-turbo 6.75-litre V12 engine that produces 571PS of power and 900Nm of torque. The engine is turned to deliver all of its torque at revs as low as 1,700. The eight-speed auto does its job well and although the Phantom VIII weighs over 2.6-tonnes, it can hit 100kmph in 5.4 seconds and clock a top speed of 250kmph.</p><br>\r\n\r\n<p>The list of creature comforts is endless. Touted as the car with the world\'s quietest cabin, its fitted with a 130kg sound insulation system and double laminated glass windows to cut all the unnecessary and harsh road noises. It includes alertness assistant, a 4-camera system with panoramic view, all-round visibility with helicopter view, night vision and vision assist and active cruise control. The list continues with collision and pedestrian warning, cross-traffic warning, lane departure and lane change warning, 7x3 high-resolution heads-up display and a WiFi hotspot. </p><br>'),
(11, 'Bentley Continental Flying Spur', 'car11.jpg', 34100000, '<p>With a powerful 6.0 litre W12 engine, the new Flying Spur* is an alluring combination of dynamic performance and modern craftsmanship. It is contemporary in its design and inspired in its execution. It is full of intuitive technology that keeps you connected to your car and the world around you. And it is designed to deliver an experience that is as refined and exhilarating for the passenger as it is for the driver.</p><br>\r\n\r\n<p>The new Flying Spur combines breathtaking power and agility to deliver a driving experience that is both exhilarating and sophisticated. Built around a formidable 6.0 litre W12 engine, it delivers 635 PS of power and 900 Nm of torque so you can enjoy effortless acceleration whenever you need it. A seemingly endless surge of power takes you from 0 to 60 mph in 3.7 seconds (0 to 100 km/h in 3.8. seconds) and on to a top speed of 207 mph (333 km/h).</p><br>\r\n\r\n<p>An eight-speed dual-clutch transmission ensures rapid gearshifts and smooth acceleration, reaching maximum speed in sixth gear, so that seventh and eighth gears provide reduced fuel consumption when you’re cruising at speed.</p><br>'),
(12, 'Audi A8 limousine', 'car12.jpg', 15600000, '<p>Audi fully redesigned the A8 for the 2019 model year, and the 2020 model sees some significant changes as well. Most notable is the introduction of three new models, each with its own powertrain. The 2019 A8 was only available with a 335-horsepower turbocharged V6 engine. The new 2020 A8 still offers that engine, along with a 453-horsepower twin-turbocharged V8 and a high-performance 563-horsepower twin-turbo V8.</p><br>\r\n\r\n<p>Other changes for 2020 include standard lane departure warning, a feature that was optional in 2019, and the debut of a plug-in-hybrid A8, which is expected later in 2020. If you want the extra muscle provided by the new engines, you\'ll have to buy a 2020 A8. However, if you\'re fine with the base engine, consider shopping for a 2019 A8. It will likely save you thousands of dollars compared to a new A8, and you\'ll get a nearly identical car.</p><br>\r\n\r\n<p>You can save even more cash by shopping for a previous-generation A8. These older models are markedly different, however. The 2018 A8 lacked standard advanced safety features aside from a rearview camera and parking sensors, and it did not offer Android Auto or Apple CarPlay. The 2018 model\'s engine lineup consisted of a 333-horsepower supercharged V6, a 450-horsepower turbocharged V8, and a 605-horsepower twin-turbocharged V8. Prior to the 2017 model year, you could find the A8 in a short- or long-wheelbase body style. The long wheelbase became standard for 2017.</p><br>'),
(13, 'McLaren P1 LM', 'car13.jpg', 400000000, '<p>Lanzante\'s P1 LM was developed as a spiritual successor to the McLaren F1 LM. Just six P1 were built, including a prototype, matching the original run of F1 LMs. One of the key modifications made by Lanzante was getting the P1 GTR’s hybrid drivetrain, rated at 986 horsepower, to run on pump gas. Other mods included gold-plated heat shields in the engine bay, a lighter exhaust system, and a more efficient intercooler.</p><br>\r\n\r\n<p>Lanzante was also able to reduce weight by removing some items on the P1 GTR required for racing, such as the air jack, resulting in total weight savings of 132 pounds. The company also tweaked the aero elements to deliver even more downforce.</p><br>\r\n\r\n<p>Lanzante followed up the P1 LM this year with another P1 GTR-based special, the P1 GT Longtail. And the company\'s latest project is a run of 930 Porsche 911s powered by original Tag Turbo Formula 1 engines. Just 11 will be built using engines that actually raced and won F1 grands prix.</p><br>'),
(14, 'Lamborghini Veneno', 'car14.jpg', 280000000, '<p>The engine is a development of the Aventador\'s 6.5-litre V12 and generates a power output of 750 PS (552 kW; 740 hp) at 8,400 rpm and 690 N⋅m (509 lb⋅ft) of torque at 5,500 rpm. The increase in power was achieved by enlarging the air intakes and modifying the exhaust system.</p><br>\r\n\r\n<p>The Veneno is Lamborghini\'s interpretation of a racing prototype built for the road. The front of the car is designed for maximum airflow and for improved downforce. The redesigned front and rear arches direct air around the car in order to reduce excessive lift and aid in generating downforce. The smooth underbody ensures that the airflow is not interrupted. The large carbon-fibre rear wing connected to the car via an LMP-style central fin is three-way adjustable. The wheels of the car (measuring 20-inch at the front and 21-inch at the rear) have a turbine-like design and direct air to cool the car\'s carbon ceramic braking system. The center lock wheels allow for easy installation and removal. The car utilises Pirelli P-Zero tyres.</p><br>\r\n\r\n<p>The Veneno retains the carbon-fibre monocoque chassis with aluminium front and rear subframe from the Aventador along with the pushrod suspension system. The interior is based largely on the Aventador\'s interior, but now incorporates the \"carbon skin\" element introduced on the Aventador J. The 7-speed ISR automated manual transmission is also retained from the Aventador and includes a new \"track\" setting for improved performance on a race track.</p><br>'),
(15, 'Aston Martin AM-RB 001', 'car15.jpg', 227631000, '<p>The car contains a 6.5-litre naturally-aspirated V12 engine tailored by Cosworth, which produces around 1,000 hp (746 kW; 1,014 PS) at 10,500 rpm, with a redline of 11,100 rpm. This will make it the most powerful naturally-aspirated engine ever to be fitted to a production road car, as well as the highest-revving. A Rimac-built hybrid battery system, which performs as a kinetic energy recovery system, is installed alongside the engine, producing up to 160 hp (119 kW; 162 PS). This brings the total output of the Valkyrie to 1,160 hp (865 kW; 1,176 PS), with power being delivered via a 7-speed single-clutch paddle-shift automated manual transmission constructed by Ricardo.</p><br>\r\n\r\n<p>At the same time the power output figures were released, the weight was announced to be 1,030 kg (2,271 lb), surpassing the intended 1:1 power-to-weight ratio with 1,126 hp (840 kW; 1,142 PS) per ton. The car can accelerate to 60 mph (97 km/h) from a standstill in a time of 2.5 seconds.</p><br>\r\n\r\n<p>The exhausts exit at the top of the car, near the engine, similar to those of Formula One cars and the Porsche 918 Spyder.</p><br>\r\n\r\n<p>Bosch supplies the Valkyrie\'s ECU unit, traction control system, and ESP. The braking system is provided by Alcon and Surface Transforms. The front and rear lights are manufactured by Wipac. The car has all-carbon fibre bodywork and is installed with a carbon fibre Monocell from manufacturer Multimatic.Michelin supplies the Valkyrie with the company\'s high-performance Sport Cup 2 tyres, having sizes of 265/35-ZR20 at the front and 325/30-ZR21 at the rear. The wheels are constructed out of lightweight magnesium alloy (20\" front, 21\" rear) with race-spec centre-lock wheel nuts to reduce mass. In 2020, after Red Bull Racing\'s Red Bull Racing RB16 had its first shakedown in Silverstone Circuit, drivers Max Verstappen and Alexander Albon drove the car around the track.</p><br>'),
(16, 'Pagani Huayra', 'car16.jpg', 150000000, '<p>When Pagani Automobili first burst onto the car scene, its Zonda was a wicked and wild supercar that was so visually arresting that its performance was almost inconsequential. Yet, it was good enough that journalists the world over lauded it as one of the greatest supercars ever. So how do you follow up?</p><br>\r\n<p> Well, Horacio Pagani is a man of vision, and his Huayra creation is even more bonkers. Sadly, a naturally-aspirated V12 is no longer viable, so Mercedes-AMG created a bespoke twin-turbo 6.0-liter V12 for the Huayra. It produces a whopping 730 horsepower and 738 lb-ft of torque. To save weight, a dual-clutch automatic has been overlooked in favor of a sequential single-clutch automatic. It all culminates into what could possibly be the most brutal assault on the senses in all aspects, with a price tag to match.</p><br>'),
(17, 'Ferrari LaFerrari', 'car17.jpg', 70000000, '<p>Ferrari once again produces an iconic, praise-worthy automobile that beckons any enthusiast its way. Not only is the LaFerrari one of the highest performance road cars Ferrari has ever produced, but it couples its 6.3-liter V12 with a 161 horsepower hybrid system. With a combined 949 horsepower and over 663 pound-feet of torque, the 2016 Ferrari LaFerrari specs top its cutting-edge engineering with efficiency, power, and stunning design. Driving a LaFerrari is an experience unto itself. If the high-voltage battery is charged, it will shut down the V12 under light load. Manually shifting the 7-speed transmission offers instant gratification, but shifting isn’t really necessary. </p><br>\r\n<p>That’s because this car makes power in any gear at any rpm. A machine designed to take the tarmac wherever it goes and at whatever particular pace, the batteries even recharge under braking, making track day all the more tempting.</p><br>'),
(18, 'Bugatti Chiron', 'car18.jpg', 212200000, '<p>The Bugatti Chiron is the new epitome of automotive engineering by creators of the iconic Veyron, which held the record for world’s fastest production car for a number of years. The Chiron retains the overall essence of the Veyron but is a completely new car. The design is much sharper and more aerodynamically efficient than the car it replaces.</p><br>\r\n<p>The Chiron is powered by a heavily reworked 8.0-litre W16 engine that also powered the Veyron. It is quad-turbocharged and features a two-stage boost system. The power output stands at 1500PS and 1600Nm. It also comes with active aerodynamics to ensure maximum performance.</p><br>\r\n<p>The entire car, including the monocoque, is made entirely out of carbon-fibre. The suspension is directly bolted to the monocoque and features a dual wishbone setup front and rear. It also comes with specially made tyres that can withstand speeds in excess of 400kmph. It can tackle the 0-100kmph sprint in just 2.5 seconds and has a top speed of 420kmph, which makes it one of the fastest cars in the world.</p><br>'),
(19, 'McLaren Speedtail', 'car19.jpg', 160400000, '<p>Offering breathtaking performance and sumptuous luxury, the 2020 McLaren Speedtail embodies the most rarified summit of hypercar achievement. With a top speed of 250 mph, this coupe holds the distinction of being the fastest McLaren ever built. The Speedtail\'s sheetmetal is streamlined and highly stylized, with its gaze set on the future. It\'s the stuff of science fiction. It boasts a hybrid powertrain that generates a staggering 1035 horsepower. If you\'re hoping to make one of these beauties your own, you\'re out of luck. Only 106 of these cars will be produced, all of which are spoken for.</p><br>\r\n\r\n<p>A twin-turbocharged 4.0-liter V-8 and an electric motor join forces here, producing a total output of 1035 horsepower and 848 lb-ft of torque. Velocity mode tailors the car\'s powertrain and active dynamics to help it achieve optimum speed. This mode, which comes standard, can also be used to lower the car by 1.4 inches. This hypercar\'s acceleration capabilities are spellbinding. According to McLaren, the Speedtail rockets from a standstill to 186 mph in just 12.8 seconds. That makes it quicker off the line than the storied McLaren P1, which made that run in 16.5 seconds.</p><br>'),
(20, 'Tesla Roadster', 'car20.jpg', 12900000, '<p>Tesla claims the new Roadster will do 0-60mph in 1.9 seconds and 0-100mph in 4.2 seconds, as well as completing a standing quarter mile in 8.8 seconds. If these figures are achievable in the real world, the model will set a number of production-car records. Tesla did not announce an official top speed, but Musk suggested it’ll be around 250mph.</p><br>\r\n\r\n<p>The new car will be powered by a 200kWh battery pack and three electric motors. It\'ll be four-wheel drive, with two motors powering the rear wheels and one powering the fronts. A maximum range of 620 miles is claimed. The Roadster is likely to use a similar \'skateboard\' chassis to other Tesla models, which keeps the heavy batteries low. This helps the car\'s centre of gravity, while the lack of an engine means it can be very aerodynamic.</p><br>\r\n\r\n<p>Tesla also revealed that its new sports car will have 2+2 seating, meaning there\'ll be small seats in the rear, suitable for occasional use. There\'s to be plenty of luggage space too, most probably thanks to the car lacking a traditional engine and gearbox.</p><br>\r\n\r\n<p>Although the car is called a Roadster, it\'ll feature a removable glass roof so you can switch between coupe and convertible body styles. The roof is a lightweight unit that stores in the boot.</p><br>');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_id` int(11) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Phone_number` bigint(15) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email_Address` varchar(255) NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_id`, `Password`, `Phone_number`, `Name`, `Address`, `Email_Address`, `Gender`) VALUES
(1, 'chalwade', 918618696481, 'Swadeep Chalwade', 'A4, M S Keerthana Apartment, Bayarappa Layout, Suddaguntapalya', 'swadeepchalwade@gmail.com', 'Male'),
(2, 'hande', 917263935332, 'Atharrva Hande', 'c3,shradha residency,golkote road,pune-63', 'atharrvahande@gmail.com', 'Male'),
(3, 'uma', 7673637288, 'uma', '28 nd Floor, Chandok Niwas, 5th Cross Road, Near Khar Gymkhana,Mumbai-52', 'uma@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `Purchase_id` int(10) NOT NULL,
  `Order_No` int(11) NOT NULL,
  `Supplier_id` int(11) NOT NULL,
  `Supplier_Delivery_Date` date NOT NULL,
  `Transaction_id` bigint(20) NOT NULL,
  `Pin` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`Purchase_id`, `Order_No`, `Supplier_id`, `Supplier_Delivery_Date`, `Transaction_id`, `Pin`) VALUES
(9, 19, 4, '2020-08-23', 45645, 24563),
(10, 20, 7, '2020-08-23', 6457474, 78656),
(13, 23, 2, '2020-08-24', 45678765, 5685776),
(15, 25, 2, '2020-09-03', 45678765, 12245);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `Order_No` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Car_id` int(11) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Price` int(20) NOT NULL,
  `Order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`Order_No`, `Customer_id`, `Car_id`, `Quantity`, `Price`, `Order_date`) VALUES
(8, 1, 1, '2', 27200000, '2020-05-19'),
(9, 1, 1, '4', 54400000, '2020-05-19'),
(10, 2, 1, '10', 136000000, '2020-05-19'),
(12, 1, 6, '10', 65990000, '2020-05-19'),
(13, 1, 13, '1', 400000000, '2020-05-20'),
(14, 1, 7, '1', 15000000, '2020-05-20'),
(15, 1, 8, '2', 600000000, '2020-05-20'),
(16, 2, 8, '5', 1500000000, '2020-05-23'),
(17, 1, 1, '4', 54400000, '2020-05-23'),
(18, 1, 2, '6', 43122000, '2020-05-23'),
(19, 1, 6, '3', 19797000, '2020-05-23'),
(20, 1, 18, '1', 212200000, '2020-05-23'),
(21, 1, 1, '5', 68000000, '2020-05-23'),
(22, 1, 8, '4', 1200000000, '2020-05-24'),
(23, 1, 1, '1', 13600000, '2020-05-24'),
(24, 1, 1, '6', 81600000, '2020-05-25'),
(25, 1, 2, '1', 7187000, '2020-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Supplier_id` int(11) NOT NULL,
  `Supplier_phone_number` bigint(15) NOT NULL,
  `Supplier_name` varchar(255) NOT NULL,
  `Supplier_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_id`, `Supplier_phone_number`, `Supplier_name`, `Supplier_address`) VALUES
(1, 9845345234, 'Ram Mohan Das', 'Gali Number 26, Vandalur Kelambakkam Main Road, Keelakottaiyur, Chennai, Tamil Nadu 600127'),
(2, 9792573925, 'Shyam Pulokit', 'Charminar Rd, Char Kaman, Ghansi Bazaar, Hyderabad, Telangana 500002'),
(3, 8376045256, 'Hari Krishna', 'Gali Number 15, Pragati Vihar, Shital Vihar, Khora Colony, Sector 62, Noida, Uttar Pradesh 201309'),
(4, 7305745865, 'Harsha Maheshwari', 'Kalyanpur, Kanpur, Uttar Pradesh 208016'),
(5, 7361645349, 'Vipul Sharma', 'Sarveshwar Mandir Road, Ambedkar Nagar, Kurla West, Kurla, Mumbai, Maharashtra 400070'),
(6, 9837445564, 'Jitendra Singh ', 'Gali Number 2, Kannamangala, Doddabanahalli, Karnataka 560067'),
(7, 7477345250, 'Raveena Nair', 'Sagardighi, Baharampur, Amritpur, Kabilpur, West Bengal 742237');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`Car_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`Purchase_id`),
  ADD KEY `Order_No` (`Order_No`),
  ADD KEY `Supplier_id` (`Supplier_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`Order_No`),
  ADD KEY `Car_id` (`Car_id`),
  ADD KEY `Customer_id` (`Customer_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `Purchase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `Order_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_ibfk_1` FOREIGN KEY (`Order_No`) REFERENCES `sales_order` (`Order_No`),
  ADD CONSTRAINT `purchase_order_ibfk_2` FOREIGN KEY (`Supplier_id`) REFERENCES `supplier` (`Supplier_id`);

--
-- Constraints for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD CONSTRAINT `sales_order_ibfk_1` FOREIGN KEY (`Car_id`) REFERENCES `cars` (`Car_id`),
  ADD CONSTRAINT `sales_order_ibfk_2` FOREIGN KEY (`Customer_id`) REFERENCES `customers` (`Customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
