import 'package:flutter/material.dart';

class Kia extends StatefulWidget {
  const Kia({super.key});

  @override
  State<Kia> createState() => _KiaState();
}

class _KiaState extends State<Kia> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: ListView.builder(
        itemCount: 10,
        itemBuilder: (BuildContext context, int index) => Stack(
          children: [
            Padding(
              padding: const EdgeInsets.fromLTRB(45, 0, 10, 10),
              child: Card(
                elevation: 2,
                shape: RoundedRectangleBorder(
                    borderRadius: BorderRadius.circular(15)),
                child: Container(
                  height: 130,
                  width: MediaQuery.of(context).size.width,
                  child: Center(
                      child: Padding(
                    padding: const EdgeInsets.fromLTRB(120, 10, 10, 0),
                    child: Column(
                      children: [
                        Text(
                          "Kia EV6",
                          style: TextStyle(fontSize: 17),
                        ),
                        SizedBox(
                          height: 20,
                        ),
                        Row(
                          crossAxisAlignment: CrossAxisAlignment.start,
                          mainAxisAlignment: MainAxisAlignment.spaceAround,
                          children: [
                            Column(
                              children: [
                                Row(
                                  children: [
                                    Image.asset(
                                      "Images/Type2.png",
                                      height: 23,
                                    ),
                                    SizedBox(
                                      width: 5,
                                    ),
                                    Text(
                                      "Type-2",
                                      style: TextStyle(fontSize: 13),
                                    ),
                                  ],
                                ),
                                SizedBox(
                                  height: 5,
                                ),
                                Row(
                                  children: [
                                    Image.asset(
                                      "Images/CCS2.png",
                                      height: 28,
                                    ),
                                    SizedBox(
                                      width: 5,
                                    ),
                                    Text("CCS-2"),
                                  ],
                                ),
                              ],
                            ),
                            Row(
                              children: [
                                Image.asset(
                                  "Images/Chademo.png",
                                  color: Color.fromARGB(255, 9, 110, 39),
                                  height: 22,
                                ),
                                SizedBox(
                                  width: 1,
                                ),
                                Text(
                                  "CHAdeMO",
                                  style: TextStyle(fontSize: 13),
                                )
                              ],
                            )
                          ],
                        ),
                      ],
                    ),
                  )),
                ),
              ),
            ),
            Align(
              alignment: Alignment.centerLeft,
              child: Container(
                child: Image.asset(
                  ('Images/kiaev6.png'),
                  height: 140,
                  width: 170,
                ),
              ),
            )
          ],
        ),
      ),
    );
  }
}
